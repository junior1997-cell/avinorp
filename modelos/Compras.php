<?php

  require "../config/Conexion_v2.php";

  class Compras
  {

    //Implementamos nuestro constructor
    public $id_usr_sesion; 
    // public $id_empresa_sesion;
    //Implementamos nuestro constructor
    public function __construct( $id_usr_sesion = 0, $id_empresa_sesion = 0 )
    {
      $this->id_usr_sesion =  isset($_SESSION['idusuario']) ? $_SESSION["idusuario"] : 0;
      // $this->id_empresa_sesion = isset($_SESSION['idempresa']) ? $_SESSION["idempresa"] : 0;
    }

    public function listar_tabla_compra() {

      $sql = "SELECT c.*, p.*, tc.abreviatura as tp_comprobante, sdi.abreviatura as tipo_documento, c.estado
      FROM compra AS c
      INNER JOIN persona AS p ON c.idproveedor = p.idpersona
      INNER JOIN sunat_c06_doc_identidad as sdi ON sdi.code_sunat = p.tipo_documento
      INNER JOIN sunat_c01_tipo_comprobante AS tc ON tc.codigo = c.tipo_comprobante
      WHERE c.estado = 1 AND c.estado_delete = 1";
      $compra = ejecutarConsulta($sql); if ($compra['status'] == false) {return $compra; }

      return $compra;
    }

    public function insertar(
      // DATOS TABLA COMPRA
      $idproveedor,  $tipo_comprobante, $serie, $impuesto, $descripcion,
      $subtotal_compra, $tipo_gravada, $igv_compra, $total_compra, $fecha_compra, $img_comprob,
      //DATOS TABLA COMPRA DETALLE
      $idproducto, $unidad_medida, $cantidad, $precio_sin_igv, $precio_igv, $precio_con_igv, 
      $descuento, $subtotal_producto    
    ){
      $sql_1 = "INSERT INTO compra(idproveedor, fecha_compra, tipo_comprobante, serie_comprobante, val_igv, descripcion, subtotal, igv, total, comprobante) 
      VALUES ('$idproveedor', '$fecha_compra', '$tipo_comprobante', '$serie', '$impuesto', '$descripcion', '$subtotal_compra', '$igv_compra', '$total_compra', '$img_comprob')";
      $newdata = ejecutarConsulta_retornarID($sql_1, 'C'); if ($newdata['status'] == false) { return  $newdata;}
      $id = $newdata['data'];

      $i = 0;
      $detalle_new = "";

      if ( !empty($newdata['data']) ) {      
        while ($i < count($idproducto)) {

          $sql_2 = "INSERT INTO compra_detalle(idproducto, idcompra, cantidad, precio_sin_igv, igv, precio_con_igv, descuento, subtotal)
          VALUES ('$idproducto[$i]', '$id', '$cantidad[$i]', '$precio_sin_igv[$i]', '$precio_igv[$i]', '$precio_con_igv[$i]', '$descuento[$i]', '$subtotal_producto[$i]');";
          $detalle_new =  ejecutarConsulta_retornarID($sql_2, 'C'); if ($detalle_new['status'] == false) { return  $detalle_new;}          
          $id_d = $detalle_new['data'];

          // Aumentamos el Stock
          $sql_2_1 = "UPDATE producto set  stock = stock + $cantidad[$i] where idproducto = '$idproducto[$i]' ;";
          $actualizar_stock =  ejecutarConsulta($sql_2_1); if ($actualizar_stock['status'] == false) { return  $actualizar_stock;}

          // Calculamos promedio de compra por producto
          $sql_3 = "SELECT AVG(precio_con_igv) AS promedio_precio FROM compra_detalle WHERE idproducto = '$idproducto[$i]';";
          $agv_resultado = ejecutarConsultaSimpleFila($sql_3); if ($agv_resultado['status'] == false) { return $agv_resultado; }

          $promedio_precio = $agv_resultado['data']['promedio_precio'];

          // Actualizamos precio_compra en tabla producto
          $sql_4 = "UPDATE producto SET precio_compra = '$promedio_precio' WHERE idproducto = '$idproducto[$i]';";
          $actualizar_precio = ejecutarConsulta($sql_4); 
          if ($actualizar_precio['status'] == false) { return $actualizar_precio; }

          $i = $i + 1;
        }
      }
      return $detalle_new;
    }

    public function editar( $idcompra, $idproveedor,  $tipo_comprobante, $serie, $impuesto, $descripcion, $subtotal_compra, $tipo_gravada, $igv_compra, $total_compra, $fecha_compra, $img_comprob,        
    $idproducto, $unidad_medida, $cantidad, $precio_sin_igv, $precio_igv, $precio_con_igv, $descuento, $subtotal_producto) {

      $sql_1 = "UPDATE compra SET idproveedor = '$idproveedor', fecha_compra = '$fecha_compra', tipo_comprobante = '$tipo_comprobante', serie_comprobante = '$serie', 
      val_igv = '$impuesto', descripcion = '$descripcion', subtotal = '$subtotal_compra', igv = '$igv_compra', total = '$total_compra', comprobante = '$img_comprob'
      WHERE idcompra = '$idcompra'";
      $result_sql_1 = ejecutarConsulta($sql_1, 'U');if ($result_sql_1['status'] == false) { return $result_sql_1; }

      // Devolvemos el Stock
      foreach ($idproducto as $key => $val) {
        $sql_1_1 = "UPDATE producto set  stock = stock - (select cantidad from compra_detalle where idproducto = '$val' and idcompra = '$idcompra') where idproducto = '$val' ;";
        $actualizar_stock =  ejecutarConsulta($sql_1_1); if ($actualizar_stock['status'] == false) { return  $actualizar_stock;} 
      }

      // Eliminamos los productos
      $sql_del = "DELETE FROM compra_detalle WHERE idcompra = '$idcompra'";
      ejecutarConsulta($sql_del);

      // Creamos los productos
      foreach ($idproducto as $i => $producto) {

        // Insertar nuevo detalle
        $sql_2 = "INSERT INTO compra_detalle(idproducto, idcompra, cantidad, precio_sin_igv, igv, precio_con_igv, descuento, subtotal)
        VALUES ('$idproducto[$i]', '$idcompra', '$cantidad[$i]', '$precio_sin_igv[$i]', '$precio_igv[$i]', '$precio_con_igv[$i]', '$descuento[$i]', '$subtotal_producto[$i]');";
        $detalle_new =  ejecutarConsulta_retornarID($sql_2, 'C'); if ($detalle_new['status'] == false) { return  $detalle_new;}        
        
        // Aumentar stock nuevo
        $sql_2_1 = "UPDATE producto SET stock = stock + $cantidad[$i] WHERE idproducto = '$idproducto[$i]';";
        $actualizar_stock = ejecutarConsulta($sql_2_1);
        if ($actualizar_stock['status'] == false) { return $actualizar_stock; }

        // Calculamos promedio de compra por producto
        $sql_3 = "SELECT AVG(precio_con_igv) AS promedio_precio FROM compra_detalle WHERE idproducto = '$idproducto[$i]';";
        $agv_resultado = ejecutarConsultaSimpleFila($sql_3); if ($agv_resultado['status'] == false) { return $agv_resultado; }

        $promedio_precio = $agv_resultado['data']['promedio_precio'];

        // Actualizamos precio_compra en tabla producto
        $sql_4 = "UPDATE producto SET precio_compra = '$promedio_precio' WHERE idproducto = '$idproducto[$i]';";
        $actualizar_precio = ejecutarConsulta($sql_4); 
        if ($actualizar_precio['status'] == false) { return $actualizar_precio; }

      }  
      
      return array('status' => true, 'message' => 'Datos actualizados correctamente.');
    }
  

    public function mostrar_detalle_compra($idcompra){

      $sql_1 = "SELECT c.*, p.*, tc.abreviatura as tp_comprobante, sdi.abreviatura as tipo_documento, c.estado
      FROM compra AS c
      INNER JOIN persona AS p ON c.idproveedor = p.idpersona
      INNER JOIN sunat_c06_doc_identidad as sdi ON sdi.code_sunat = p.tipo_documento
      INNER JOIN sunat_c01_tipo_comprobante AS tc ON tc.codigo = c.tipo_comprobante
      WHERE c.idcompra = '$idcompra'
      AND c.estado = 1 AND c.estado_delete = 1";
      $compra = ejecutarConsultaSimpleFila($sql_1); if ($compra['status'] == false) {return $compra; }


      $sql_2 = "SELECT cd.*, pd.*
      FROM compra_detalle AS cd
      INNER JOIN producto AS pd ON cd.idproducto = pd.idproducto
      WHERE  cd.idcompra = '$idcompra'
      AND cd.estado = 1 AND cd.estado_delete = 1";
      $detalle = ejecutarConsultaArray($sql_2); if ($detalle['status'] == false) {return $detalle; }

      return $datos = ['status' => true, 'message' => 'Todo ok', 'data' => ['compra' => $compra['data'], 'detalle' => $detalle['data']]];

    }


    public function mostrar_compra($id){
      $sql = "SELECT * FROM compra WHERE idcompra = '$id'";
      return ejecutarConsultaSimpleFila($sql);
    }

    public function mostrar_editar_detalles_compra($id){
      $sql = "SELECT * FROM compra WHERE idcompra = '$id'";
      $compra = ejecutarConsultaSimpleFila($sql);

      $sql = "SELECT dc.*, p.nombre, p.codigo, p.codigo_alterno, p.imagen, sum.nombre AS unidad_medida, cat.nombre AS categoria, mc.nombre AS marca
      FROM compra_detalle AS dc
        INNER JOIN producto AS p ON p.idproducto = dc.idproducto
        INNER JOIN sunat_unidad_medida AS sum ON p.idsunat_unidad_medida = sum.idsunat_unidad_medida
        INNER JOIN producto_categoria AS cat ON p.idproducto_categoria = cat.idproducto_categoria
        INNER JOIN producto_marca AS mc ON p.idproducto_marca = mc.idproducto_marca
      WHERE dc.idcompra = '$id'
        AND p.estado = 1
        AND p.estado_delete = 1;";
      $compra_detalle = ejecutarConsultaArray($sql);
      return ['status' => true, 'message' =>'todo okey', 'data'=>['compra' => $compra['data'], 'compra_detalle' => $compra_detalle['data'],]];
    }

    public function eliminar($id){
      $sql = "UPDATE compra SET estado_delete = 0
      WHERE idcompra = '$id'";
      return ejecutarConsulta($sql, 'U');
    }

    public function desactivar($id){
      $sql = "UPDATE compra SET estado = 0
      WHERE idcompra = '$id'";
      return ejecutarConsulta($sql, 'U');
    }



    public function listar_tabla_producto(){
      $sql = "SELECT p.*, sum.nombre AS unidad_medida, cat.nombre AS categoria, mc.nombre AS marca
      FROM producto AS p
      INNER JOIN sunat_unidad_medida AS sum ON p.idsunat_unidad_medida = sum.idsunat_unidad_medida
      INNER JOIN producto_categoria AS cat ON p.idproducto_categoria = cat.idproducto_categoria
      INNER JOIN producto_marca AS mc ON p.idproducto_marca = mc.idproducto_marca
      WHERE p.idproducto <> 1 AND p.idproducto_categoria <> 1  AND p.estado = 1 AND p.estado_delete = 1;";
      return ejecutarConsulta($sql);
    }

    public function mostrar_producto($idproducto){
      $sql = "SELECT p.*, sum.nombre AS unidad_medida, cat.nombre AS categoria, mc.nombre AS marca
      FROM producto AS p
      INNER JOIN sunat_unidad_medida AS sum ON p.idsunat_unidad_medida = sum.idsunat_unidad_medida
      INNER JOIN producto_categoria AS cat ON p.idproducto_categoria = cat.idproducto_categoria
      INNER JOIN producto_marca AS mc ON p.idproducto_marca = mc.idproducto_marca
      WHERE p.idproducto = '$idproducto'  AND p.estado = 1 AND p.estado_delete = 1;";
      return ejecutarConsultaSimpleFila($sql);
    }

    public function listar_producto_x_codigo($codigo){
      $sql = "SELECT p.*, sum.nombre AS unidad_medida, cat.nombre AS categoria, mc.nombre AS marca
      FROM producto AS p
      INNER JOIN sunat_unidad_medida AS sum ON p.idsunat_unidad_medida = sum.idsunat_unidad_medida
      INNER JOIN producto_categoria AS cat ON p.idproducto_categoria = cat.idproducto_categoria
      INNER JOIN producto_marca AS mc ON p.idproducto_marca = mc.idproducto_marca
      WHERE (p.codigo = '$codigo' OR p.codigo_alterno = '$codigo' ) AND p.estado = 1 AND p.estado_delete = 1;";
        return ejecutarConsultaSimpleFila($sql);
      
    }

  }

  




?>