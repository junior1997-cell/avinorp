<?php

declare(strict_types=1);

use Greenter\Data\DocumentGeneratorInterface;
use Greenter\Data\GeneratorFactory;
use Greenter\Data\SharedStore;
use Greenter\Model\DocumentInterface;
use Greenter\Model\Response\CdrResponse;
use Greenter\Model\Sale\SaleDetail;
use Greenter\Report\HtmlReport;
use Greenter\Report\PdfReport;
use Greenter\Report\Resolver\DefaultTemplateResolver;
use Greenter\Report\XmlUtils;
use Greenter\See;

final class Util
{
  /**
   * @var Util
   */
  private static $current;
  /**
   * @var SharedStore
   */
  public $shared;

  private function __construct()
  {
    $this->shared = new SharedStore();
  }

  public static function getInstance(): Util
  {
    if (!self::$current instanceof self) {
      self::$current = new self();
    }

    return self::$current;
  }

  public function getSee(?string $endpoint)
  {
    $see = new See();
    $see->setService($endpoint);
    //        $see->setCodeProvider(new XmlErrorCodeProvider());
    $certificate = file_get_contents( '../assets/certificado/cert.pem');
    if ($certificate === false) {
      throw new Exception('No se pudo cargar el certificado');
    }
    $see->setCertificate($certificate);
    /**
     * Clave SOL
     * Ruc     = 20000000001
     * Usuario = MODDATOS
     * Clave   = moddatos
     */
    $see->setClaveSOL('20123456789', 'MODDATOS', 'moddatos');
    $see->setCachePath(__DIR__ . '/../cache');

    return $see;
  }

  // public function getSeeApi()
  // {
  //   $api = new \Greenter\Api([
  //     'auth' => 'https://gre-test.nubefact.com/v1',
  //     'cpe' => 'https://gre-test.nubefact.com/v1',
  //   ]);
  //   $certificate = file_get_contents( '../assets/certificado/cert.pem');
  //   if ($certificate === false) {
  //     throw new Exception('No se pudo cargar el certificado');
  //   }
  //   return $api->setBuilderOptions([
  //     'strict_variables' => true,
  //     'optimizations' => 0,
  //     'debug' => true,
  //     'cache' => false,
  //   ])
  //     ->setApiCredentials('test-85e5b0ae-255c-4891-a595-0b98c65c9854', 'test-Hty/M6QshYvPgItX2P0+Kw==')
  //     ->setClaveSOL('20161515648', 'MODDATOS', 'MODDATOS')
  //     ->setCertificate($certificate);
  // }

  // public function getSeeApi()
  // {
  //   $api = new \Greenter\Api([
  //     'auth' => 'https://api-seguridad.sunat.gob.pe/v1',
  //     'cpe' => 'https://api-cpe.sunat.gob.pe/v1',
  //   ]);
  //   $certificate = file_get_contents( '../assets/certificado/certificate.pem');
  //   if ($certificate === false) {
  //     throw new Exception('No se pudo cargar el certificado');
  //   }
  //   $api->setCertificate(file_get_contents('../assets/certificado/certificate.pem'));
  //   $api->setClaveSOL('10429804626', 'JDLTEC25', 'JdlTec2025');    
  //   $api->setApiCredentials('665e6380-9a07-4226-8147-51513df42dc4', 'mgnV41fwGqzNMNHs6WFDRQ==');
  //   return $api;    
  // }

  // public function getGRECompany(): \Greenter\Model\Company\Company
  // {
  //   return (new \Greenter\Model\Company\Company())
  //     ->setRuc('20161515648')
  //     ->setRazonSocial('GREENTER S.A.C.');
  // }

  public function getGRECompany(): \Greenter\Model\Company\Company
  {
    return (new \Greenter\Model\Company\Company())
      ->setRuc('20611208694')
      ->setRazonSocial('GRUPO NOVEDADES D & S S.A.C.');
  }

  public function showResponse(DocumentInterface $document, CdrResponse $cdr): void
  {
    $filename = $document->getName();

    require __DIR__ . '/../views/response.php';
  }

  public function getErrorResponse(\Greenter\Model\Response\Error $error): array
  {
    // $result = <<<HTML
    //   <h2 class="text-danger">Error:</h2><br>
    //   <b>Código:</b>{$error->getCode()}<br>
    //   <b>Descripción:</b>{$error->getMessage()}<br>
    // HTML;
    $result = [ 
      'codigo' => $error->getCode(),
      'mensaje' => $error->getMessage(),
    ];

    return $result;
  }

  public function writeXml($ruta, DocumentInterface $document, ?string $xml): void
  {
    $this->writeFile($ruta, $document->getName() . '.xml', $xml);
  }

  public function writeCdr($ruta, DocumentInterface $document, ?string $zip): void
  {
    $this->writeFile($ruta, 'R-' . $document->getName() . '.zip', $zip);
  }

  public function writeFile($ruta, ?string $filename, ?string $content): void
  {
    if (getenv('GREENTER_NO_FILES')) {
      return;
    }

    $fileDir = $ruta;

    if (!file_exists($fileDir)) {
      mkdir($fileDir, 0777, true);
    }

    file_put_contents($fileDir . DIRECTORY_SEPARATOR . $filename, $content);
  }

  // public function getPdf(DocumentInterface $document): ?string
  // {
  //   $html = new HtmlReport('', [
  //     'cache' => __DIR__ . '/../cache',
  //     'strict_variables' => true,
  //   ]);
  //   $resolver = new DefaultTemplateResolver();
  //   $template = $resolver->getTemplate($document);
  //   $html->setTemplate($template);

  //   $render = new PdfReport($html);
  //   $render->setOptions([
  //     'no-outline',
  //     'print-media-type',
  //     'viewport-size' => '1280x1024',
  //     'page-width' => '21cm',
  //     'page-height' => '29.7cm',
  //     'footer-html' => __DIR__ . '/../resources/footer.html',
  //   ]);
  //   $binPath = self::getPathBin();
  //   if (file_exists($binPath)) {
  //     $render->setBinPath($binPath);
  //   }
  //   $hash = $this->getHash($document);
  //   $params = self::getParametersPdf();
  //   $params['system']['hash'] = $hash;
  //   $params['user']['footer'] = '<div>consulte en <a href="https://github.com/giansalex/sufel">sufel.com</a></div>';

  //   $pdf = $render->render($document, $params);

  //   if ($pdf === null) {
  //     $error = $render->getExporter()->getError();
  //     echo 'Error: ' . $error;
  //     exit();
  //   }

  //   // Write html
  //   $this->writeFile($document->getName() . '.html', $render->getHtml());

  //   return $pdf;
  // }

  public function getGenerator(string $type): ?DocumentGeneratorInterface
  {
    $factory = new GeneratorFactory();
    $factory->shared = $this->shared;

    return $factory->create($type);
  }

  /**
   * @param SaleDetail $item
   * @param int $count
   * @return array<SaleDetail>
   */
  public function generator(SaleDetail $item, int $count): array
  {
    $items = [];

    for ($i = 0; $i < $count; $i++) {
      $items[] = $item;
    }

    return $items;
  }

  // public function showPdf(?string $content, ?string $filename): void
  // {
  //   $this->writeFile($filename, $content);
  //       header('Content-type: application/pdf');
  //       header('Content-Disposition: inline; filename="' . $filename . '"');
  //       header('Content-Transfer-Encoding: binary');
  //       header('Content-Length: ' . strlen($content));

  //       echo $content;
  // }

  public static function getPathBin(): string
  {
    $path = __DIR__ . '/../vendor/bin/wkhtmltopdf';
    if (self::isWindows()) {
      $path .= '.exe';
    }

    return $path;
  }

  public static function isWindows(): bool
  {
    return strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
  }

  // private function getHash(DocumentInterface $document): ?string
  // {
  //   $see = $this->getSee('');
  //   $xml = $see->getXmlSigned($document);

  //   return (new XmlUtils())->getHashSign($xml);
  // }

  /**
   * @return array<string, array<string, array<int, array<string, string>>|bool|string>>
   */
  private static function getParametersPdf(): array
  {
    $logo = file_get_contents(__DIR__ . '/../resources/logo.png');

    return [
      'system' => [
        'logo' => $logo,
        'hash' => ''
      ],
      'user' => [
        'resolucion' => '212321',
        'header' => 'Telf: <b>(056) 123375</b>',
        'extras' => [
          ['name' => 'FORMA DE PAGO', 'value' => 'Contado'],
          ['name' => 'VENDEDOR', 'value' => 'GITHUB SELLER'],
        ],
      ]
    ];
  }
  
}
