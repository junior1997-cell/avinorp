 insert into producto_presentacion (idproducto, idsunat_c03_unidad_medida, nombre, cantidad)
 select idproducto, 58 as unidad_medida, 'UNIDADADES' AS Nnombre, 1 cantidad from producto;

 -- Crear unidad basica
 insert into producto_presentacion  (idproducto, idsunat_c03_unidad_medida, nombre, cantidad)
 select idproducto, 14 as unidad_medida, 'DOCENA' AS Nnombre, 12 cantidad from producto;


INSERT INTO `sucursal` (`idsucursal`, `nombre`, `codigo_sunat`, `igv`, `glosa_amazonica`, `direccion`, `telefono`, `correo`, `web`, `descripcion`, `estado`, `estado_delete`, `created_at`, `updated_at`, `user_trash`, `user_delete`, `user_created`, `user_updated`) VALUES
(1, 'PRINCIPAL', NULL, 0.00, 'SI', 'AV. PRINCIPAL', NULL, NULL, NULL, NULL, '1', '1', '2025-05-26 23:22:55', '2025-05-26 23:22:55', NULL, NULL, NULL, NULL);

 insert into producto_sucursal ( idsucursal, idproducto, stock, stock_minimo, precio_compra, precio_venta, precio_por_mayor)
 select 1 as idsucursal, idproducto, stock, stock_minimo, precio_compra, precio_venta, precioB as  precio_mayor  from producto_old;




 -- Migracion version 2


UPDATE producto_presentacion AS pp
JOIN (
    SELECT ppo.idproducto_presentacion, ps.idproducto_sucursal
    FROM producto_presentacion_old ppo
    INNER JOIN producto AS p ON p.idproducto = ppo.idproducto
    INNER JOIN producto_sucursal AS ps ON ps.idproducto = ppo.idproducto
) AS sub
ON pp.idproducto_presentacion = sub.idproducto_presentacion
SET pp.idproducto_sucursal = sub.idproducto_sucursal;

-- presentacion: Docena
UPDATE producto_presentacion AS pp
JOIN (
    SELECT ppo.idproducto_presentacion, ps.idproducto_sucursal, ppo.cantidad, ps.precio_venta, ps.precio_por_mayor, ppo.idsunat_c03_unidad_medida
    FROM producto_presentacion_old ppo
    INNER JOIN producto AS p ON p.idproducto = ppo.idproducto
    INNER JOIN producto_sucursal AS ps ON ps.idproducto = ppo.idproducto where ppo.idsunat_c03_unidad_medida <> 58
) AS sub
ON pp.idproducto_presentacion = sub.idproducto_presentacion
SET pp.precio_venta = sub.precio_por_mayor, pp.precio_venta_total = sub.precio_por_mayor * sub.cantidad;

-- preentacion: UND
UPDATE producto_presentacion AS pp
JOIN (
    SELECT ppo.idproducto_presentacion, ps.idproducto_sucursal, ppo.cantidad, ps.precio_venta, ps.precio_por_mayor, ppo.idsunat_c03_unidad_medida
    FROM producto_presentacion_old ppo
    INNER JOIN producto AS p ON p.idproducto = ppo.idproducto
    INNER JOIN producto_sucursal AS ps ON ps.idproducto = ppo.idproducto where ppo.idsunat_c03_unidad_medida = 58
) AS sub
ON pp.idproducto_presentacion = sub.idproducto_presentacion
SET pp.precio_venta = sub.precio_venta, pp.precio_venta_total = sub.precio_venta * sub.cantidad;
