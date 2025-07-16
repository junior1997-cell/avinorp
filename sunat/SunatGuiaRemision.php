<?php

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

// $see = new \Greenter\Api([
//   'auth' => 'https://api-seguridad.sunat.gob.pe/v1',
//   'cpe' => 'https://api-cpe.sunat.gob.pe/v1',
// ]);
// $see->setCertificate(file_get_contents('../assets/certificado/cert.pem'));
// $see->setClaveSOL('20161515648', 'MODDATOS', 'MODDATOS');
// $see->setApiCredentials('test-85e5b0ae-255c-4891-a595-0b98c65c9854', 'test-Hty/M6QshYvPgItX2P0+Kw==');

$see = new \Greenter\Api([
  'auth' => 'https://gre-test.nubefact.com/v1',
  'cpe' => 'https://gre-test.nubefact.com/v1',
]);
$certificate = file_get_contents('../assets/certificado/cert.pem');
if ($certificate === false) {
  throw new Exception('No se pudo cargar el certificado');
}
return $see->setBuilderOptions([
  'strict_variables' => true,
  'optimizations' => 0,
  'debug' => true,
  'cache' => false,
])
  ->setApiCredentials('test-85e5b0ae-255c-4891-a595-0b98c65c9854', 'test-Hty/M6QshYvPgItX2P0+Kw==')
  ->setClaveSOL('20161515648', 'MODDATOS', 'MODDATOS')
  ->setCertificate($certificate);

