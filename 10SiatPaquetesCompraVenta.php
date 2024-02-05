<?php
use RobRichards\XMLSecLibs\XMLSecurityDSig;
use RobRichards\XMLSecLibs\XMLSecurityKey;
require 'vendor/autoload.php';

require 'CUF.php';



date_default_timezone_set('America/La_Paz');
$cuis1="1D464E1F";
$codigo1="BQXlDcClvQUE=NzzlFN0MwMUIwRjY=QlVjV3NVVkRYVUJcwNDEwNkJCMEYwQ";
$codigoControl1="3A8C1A797E5FD74";

$cuis0="E7A51EB0";
$codigo0="BQTlDTkVCQkE=NzjdEODFGRDM1NkU=Qj5AdGtJSUhYVUFIwREU2OTlBMjJBR";
$codigoControl0="4E33964D88BFD74";

//3573986
$codigoPuntoVenta=0;
$codigoControl=$codigoControl0;
$cufd=$codigo0;
$cuis=$cuis0;

//$codigoEvento=3629231;

$codigoMotivoEvento=1; // 1 corte de internet 2 inacccesibilidad 3 ingreso a zonas sin internet
//$h="08";
//$m="34";
//$s="00";
//$s2=(int)$s+1;
//$cantidad=1;

$token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJTRUxBX09SVTgzMSIsImNvZGlnb1Npc3RlbWEiOiI3MjBERTY5OUEyMkFGN0Q4MUZEMzU2RSIsIm5pdCI6Ikg0c0lBQUFBQUFBQUFETTBNRFF3TVRRMk1ESURBS2tRRzB3S0FBQUEiLCJpZCI6MjcyNjcsImV4cCI6MTY5OTY2MDgwMCwiaWF0IjoxNjY4MTk0OTQxLCJuaXREZWxlZ2FkbyI6MTAxMDQxMzAyNiwic3Vic2lzdGVtYSI6IlNGRSJ9.aSVGU842o3ZouNzTHJ8PvngAMJ5srLwn3KJmKYFXZGacfNutJibnDwZDWIhm5vtl8gT7No7uYoM67czBvuTH3A";
$codigoAmbiente="1";
$codigoDocumentoSector=1; //1 compra venta, 13 servicios basicos, 24 nota credito debito, 29 nota conciliacion
$codigoEmision=1;//1 online, 2 offline, 3 masiva
$codigoModalidad=1;

$codigoSistema="720DE699A22AF7D81FD356E";
$codigoSucursal=0;

$nit="1010413026";
$tipoFacturaDocumento=1;


//$temision=1; //1 online, 2 offline, 3 masiva
$cdf=1; // 1 con credito fiscal 2 sin credito fiscal 3 nota credito debito



//$fechaEnvio=date('Y-m-d\TH:i:s.000');
//$client = new \SoapClient("https://siatrest.impuestos.gob.bo/v2/ServicioFacturacionCompraVenta?WSDL",  [
//    'stream_context' => stream_context_create([
//        'http' => [
//            'header' => "apikey: TokenApi " . $token,
//        ]
//    ]),
//    'cache_wsdl' => WSDL_CACHE_NONE,
//    'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
//    'trace' => 1,
//    'use' => SOAP_LITERAL,
//    'style' => SOAP_DOCUMENT,
//]);
//
//    $result= $client->anulacionFactura([
//        "SolicitudServicioAnulacionFactura"=>[
//            "codigoAmbiente"=>$codigoAmbiente,
//            "codigoDocumentoSector"=>$codigoDocumentoSector,
//            "codigoEmision"=>$codigoEmision,
//            "codigoModalidad"=>$codigoModalidad,
//            "codigoPuntoVenta"=>$codigoPuntoVenta,
//            "codigoSistema"=>$codigoSistema,
//            "codigoSucursal"=>$codigoSucursal,
//            "cufd"=>$cufd,
//            "cuis"=>$cuis,
//            "nit"=>$nit,
//            "tipoFacturaDocumento"=>$tipoFacturaDocumento,
//            "codigoMotivo"=>"1",
//            "cuf"=>"4522A0B5D284070744D37D2A9D175BB775DCC257C7339852C2C4AFD74",
//        ]
//    ]);
//    var_dump($result);
//exit;
//exit();

//deleteFile();
//     * @param nit NIT emisor
//     * @param fh Fecha y Hora en formato yyyyMMddHHmmssSSS
//     * @param sucursal
//     * @param mod Modalidad
//     * @param temision Tipo de Emision
//     * @param cdf Codigo Documento Fiscal
//     * @param tds Tipo Documento Sector
//     * @param nf Numero de Factura
//     * @param pos Punto de Venta



//$client = new \SoapClient("https://siatrest.impuestos.gob.bo/v2/FacturacionOperaciones?WSDL",  [
//    'stream_context' => stream_context_create([
//        'http' => [
//            'header' => "apikey: TokenApi " . $token,
//        ]
//    ]),
//    'cache_wsdl' => WSDL_CACHE_NONE,
//    'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
//    'trace' => 1,
//    'use' => SOAP_LITERAL,
//    'style' => SOAP_DOCUMENT,
//]);
//$result= $client->registroEventoSignificativo([
//    "SolicitudEventoSignificativo"=>[
//        "codigoAmbiente"=>$codigoAmbiente,
//        "codigoMotivoEvento"=>$codigoMotivoEvento,
//        "codigoPuntoVenta"=>$codigoPuntoVenta,
//        "codigoSistema"=>$codigoSistema,
//        "codigoSucursal"=>$codigoSucursal,
//        "cufd"=>$cufd,
//        "cufdEvento"=>"BQTlDTkVCQkE=NzjdEODFGRDM1NkU=Qkt7RFFJWEdYVUFIwREU2OTlBMjJBR",
//        "cuis"=>$cuis,
//        "descripcion"=>$codigoMotivoEvento,
//        "fechaHoraFinEvento"=>date("2023-06-22\T17:57:44").".000",
//        "fechaHoraInicioEvento"=>date("2023-06-22\T08:34:31").".000",
//        "nit"=>$nit
//    ]
//]);
//var_dump($result);
//exit;


//$codigoEvento=$result->RespuestaListaEventos->codigoRecepcionEventoSignificativo;
$codigoEvento=12822810;
//error_log("codigoMotivoEvento: ".json_encode($codigoMotivoEvento));
//exit;
//$h="08";
//$m="34";
//$s="29";


//$datos=datos();
//error_log(count($datos));
//
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://192.168.1.124/selasisbancoImpuestos/api/index.php/obtenerFacturablesOtrosIngresos?fecha=2023-06-22');
$facturas = json_decode($response->getBody(), true);
//$facturas = [$facturas[0],$facturas[1]];
$cantidad=count($facturas);
foreach ($facturas as $index=>$factura){
    error_log("llamando".json_encode($factura['pag_nren']));
    $numeroFactura=$factura['pag_nren'];
    $response = $client->request('GET', 'http://192.168.1.124/selasisbancoImpuestos/api/index.php/obtenerFacturablesOtrosIngresosFactura?fecha=2023-06-22&numeroFactura='.$numeroFactura);
    $detalleFactura = json_decode($response->getBody(), true);
    $facturas[$index]['detalles']=$detalleFactura;
}
//error_log(json_encode($facturas));
//exit;

foreach ($facturas as $index=>$factura){
    $miliSegundo='000';
    $horasDate=substr($factura['pag_fpag1'],11,2);
    $minutosDate=substr($factura['pag_fpag1'],14,2);
    $segundosDate=substr($factura['pag_fpag1'],17,2);
    $detalles = $factura['detalles'];
    $detallesText="";
    $nf=intval($factura['pag_nren']);
    foreach ($detalles as $detalle){
        $detallesText=$detallesText."    <detalle>
        <actividadEconomica>841001</actividadEconomica>
        <codigoProductoSin>99100</codigoProductoSin>
        <codigoProducto>2216</codigoProducto>
        <descripcion>".$detalle['pag_glos']."</descripcion>
        <cantidad>1</cantidad>
        <unidadMedida>62</unidadMedida>
        <precioUnitario>".$detalle['otr_vlpg']."</precioUnitario>
        <montoDescuento xsi:nil='true'/>
        <subTotal>".$detalle['otr_vlpg']."</subTotal>
        <numeroSerie xsi:nil='true'/>
        <numeroImei xsi:nil='true'/>
    </detalle>";
    }
//    exit;
//    $m="34";
//    $s="29";

//    $fechaEnvio=date("2023-m-d\T$h:$m:$s").".$miliSegundo";
    $cuf = new CUF();
    $cuf = $cuf->obtenerCUF($nit, date("20230622".$horasDate.$minutosDate.$segundosDate."$miliSegundo"), $codigoSucursal, $codigoModalidad, $codigoEmision, $cdf, $codigoDocumentoSector, $nf, $codigoPuntoVenta);
    $cuf=$cuf."339852C2C4AFD74";
    $xml = new SimpleXMLElement("<?xml version='1.0' encoding='UTF-8' standalone='yes'?>
<facturaElectronicaCompraVenta xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:noNamespaceSchemaLocation='facturaElectronicaCompraVenta.xsd'>    <cabecera>
        <nitEmisor>1010413026</nitEmisor>
        <razonSocialEmisor>SERVICIO LOCAL DE ACUEDUCTOS Y ALCANTARILLADO - ORURO</razonSocialEmisor>
        <municipio>Oruro</municipio>
        <telefono>5243600</telefono>
        <numeroFactura>$nf</numeroFactura>
        <cuf>$cuf</cuf>
        <cufd>BQTlDTkVCQkE=NzjdEODFGRDM1NkU=Qkt7RFFJWEdYVUFIwREU2OTlBMjJBR</cufd>
        <codigoSucursal>0</codigoSucursal>
        <direccion>AVENIDA VILLARROEL, BACKOVIC Y BRASIL, NRO:222 NORESTE, ACERA NORTE, FRENTE A LA TERMINAL DE BUSES</direccion>
        <codigoPuntoVenta>$codigoPuntoVenta</codigoPuntoVenta>
        <fechaEmision>2023-06-22T$horasDate:$minutosDate:$segundosDate.000</fechaEmision>
        <nombreRazonSocial>".$factura['pag_apno']."</nombreRazonSocial>
        <codigoTipoDocumentoIdentidad>".(strlen($factura['pag_rucnit']) > 8 ? 5 : 1)."</codigoTipoDocumentoIdentidad>
        <numeroDocumento>".$factura['pag_rucnit']."</numeroDocumento>
        <complemento xsi:nil='true'/>
        <codigoCliente>".$factura['pag_rucnit']."</codigoCliente>
        <codigoMetodoPago>1</codigoMetodoPago>
        <numeroTarjeta xsi:nil='true'/>
        <montoTotal>".$factura['pag_valo']."</montoTotal>
        <montoTotalSujetoIva>".$factura['pag_valo']."</montoTotalSujetoIva>
        <codigoMoneda>1</codigoMoneda>
        <tipoCambio>1</tipoCambio>
        <montoTotalMoneda>".$factura['pag_valo']."</montoTotalMoneda>
        <montoGiftCard xsi:nil='true'/>
        <descuentoAdicional xsi:nil='true'/>
        <codigoExcepcion>1</codigoExcepcion>
        <cafc xsi:nil='true'/>
        <leyenda>".$factura['leyenda']."</leyenda>
        <usuario>PBaptista</usuario>
        <codigoDocumentoSector>1</codigoDocumentoSector>
    </cabecera>
    ".$detallesText."
</facturaElectronicaCompraVenta>");
    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $nameFile=$factura['pag_nren'];
    $dom->save("archivos/".$nameFile.'.xml');

    firmar("archivos/".$nameFile.'.xml');

    $xml = new DOMDocument();
    $xml->load("archivos/".$nameFile.'.xml');
    if (!$xml->schemaValidate('./facturaElectronicaCompraVenta.xsd')) {
        echo "invalid";
        exit;
    }
    else {
        echo "$index validated\n";
    }
//    exit;

//    $file = "archivos/".$nameFile.'.xml';
//    $gzfile = "archivos/".$nameFile.'.xml'.'.gz';
//    $fp = gzopen ($gzfile, 'w9');
//    gzwrite ($fp, file_get_contents($file));
//    gzclose($fp);
//
//    $archivo=getFileGzip("archivos/".$nameFile.'.xml'.'.gz');
//    $hashArchivo=hash('sha256', $archivo);
//
//    $client = new \SoapClient("https://pilotosiatservicios.impuestos.gob.bo/v2/ServicioFacturacionCompraVenta?WSDL",  [
//        'stream_context' => stream_context_create([
//            'http' => [
//                'header' => "apikey: TokenApi " . $token,
//            ]
//        ]),
//        'cache_wsdl' => WSDL_CACHE_NONE,
//        'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
//        'trace' => 1,
//        'use' => SOAP_LITERAL,
//        'style' => SOAP_DOCUMENT,
//    ]);
//    $result= $client->recepcionFactura([
//        "SolicitudServicioRecepcionFactura"=>[
//            "codigoAmbiente"=>$codigoAmbiente,
//            "codigoDocumentoSector"=>$codigoDocumentoSector,
//            "codigoEmision"=>$codigoEmision,
//            "codigoModalidad"=>$codigoModalidad,
//            "codigoPuntoVenta"=>$codigoPuntoVenta,
//            "codigoSistema"=>$codigoSistema,
//            "codigoSucursal"=>$codigoSucursal,
//            "cufd"=>$cufd,
//            "cuis"=>$cuis,
//            "nit"=>$nit,
//            "tipoFacturaDocumento"=>$tipoFacturaDocumento,
//            "archivo"=>$archivo,
//            "fechaEnvio"=>$fechaEnvio,
//            "hashArchivo"=>$hashArchivo,
//        ]
//    ]);
//    var_dump($result);
}
//exit;
createZip();
$archivo=getFileGzip("archivos/archive.tar.gz");
$hashArchivo=hash('sha256', $archivo);
$fechaEnvio=date('Y-m-d\TH:i:s.000');
$client = new \SoapClient("https://siatrest.impuestos.gob.bo/v2/ServicioFacturacionCompraVenta?WSDL",  [
    'stream_context' => stream_context_create([
        'http' => [
            'header' => "apikey: TokenApi " . $token,
        ]
    ]),
    'cache_wsdl' => WSDL_CACHE_NONE,
    'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
    'trace' => 1,
    'use' => SOAP_LITERAL,
    'style' => SOAP_DOCUMENT,
]);
//$result= $client->recepcionPaqueteFactura([
//    "SolicitudServicioRecepcionPaquete"=>[
//        "codigoAmbiente"=>$codigoAmbiente,
//        "codigoDocumentoSector"=>$codigoDocumentoSector,
//        "codigoEmision"=>$codigoEmision,
//        "codigoModalidad"=>$codigoModalidad,
//        "codigoPuntoVenta"=>$codigoPuntoVenta,
//        "codigoSistema"=>$codigoSistema,
//        "codigoSucursal"=>$codigoSucursal,
//        "cufd"=>$cufd,
//        "cuis"=>$cuis,
//        "nit"=>$nit,
//        "tipoFacturaDocumento"=>$tipoFacturaDocumento,
//        "archivo"=>$archivo,
//        "fechaEnvio"=>$fechaEnvio,
//        "hashArchivo"=>$hashArchivo,
//        "cantidadFacturas"=>$cantidad,
//        "codigoEvento"=>$codigoEvento,
//        "cafc"=>"101C618FEC26E",
//    ]
//]);
//var_dump($result);
//exit;
//var_dump($result->RespuestaServicioFacturacion);
//echo $result->RespuestaServicioFacturacion->codigoRecepcion;
//while (true){
//    sleep(3);
//    $result= $client->validacionRecepcionPaqueteFactura([
//        "SolicitudServicioValidacionRecepcionPaquete"=>[
//            "codigoAmbiente"=>$codigoAmbiente,
//            "codigoDocumentoSector"=>$codigoDocumentoSector,
//            "codigoEmision"=>$codigoEmision,
//            "codigoModalidad"=>$codigoModalidad,
//            "codigoPuntoVenta"=>$codigoPuntoVenta,
//            "codigoSistema"=>$codigoSistema,
//            "codigoSucursal"=>$codigoSucursal,
//            "cufd"=>$cufd,
//            "cuis"=>$cuis,
//            "nit"=>$nit,
//            "tipoFacturaDocumento"=>$tipoFacturaDocumento,
//            "codigoRecepcion"=>$result->RespuestaServicioFacturacion->codigoRecepcion
//        ]
//    ]);
//    var_dump($result);
//}


function createZip(){
    try
    {
        $a = new PharData('archivos/archive.tar');

        // ADD FILES TO archive.tar FILE
        $files = glob('archivos/*'); //obtenemos todos los nombres de los ficheros
        $count = 0;
        foreach($files as $file){
            $a->addFile($file); //Agregamos el fichero
            $count++;
            echo $count."\n";
        }

        // COMPRESS archive.tar FILE. COMPRESSED FILE WILL BE archive.tar.gz
        $a->compress(Phar::GZ);

        // NOTE THAT BOTH FILES WILL EXISTS. SO IF YOU WANT YOU CAN UNLINK archive.tar
        unlink('archivos/archive.tar');
    }
    catch (Exception $e)
    {
        echo "Exception : " . $e;
    }
}
function getFileGzip($fileName)
{
    $file = $fileName;

    $handle = fopen($file, "rb");
    $contents = fread($handle, filesize($fileName));
    fclose($handle);

    return $contents;
}
function deleteFile()
{
    $files = glob('archivos/*'); //obtenemos todos los nombres de los ficheros
    foreach($files as $file){
        if(is_file($file))
            unlink($file); //elimino el fichero
    }
}

function firmar($fileName){
    $doc = new DOMDocument();
    $doc->load($fileName);

    $objDSig = new XMLSecurityDSig();
    $objDSig->setCanonicalMethod(XMLSecurityDSig::EXC_C14N);
    $objDSig->addReference(
        $doc,
        XMLSecurityDSig::SHA256,
        array('http://www.w3.org/2000/09/xmldsig#enveloped-signature','http://www.w3.org/TR/2001/REC-xml-c14n-20010315#WithComments'),
        array('force_uri' => true)
    );
    $objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA256, array('type'=>'private'));
    /*
    If key has a passphrase, set it using
    $objKey->passphrase = '<passphrase>';
    */
    $objKey->loadKey('secret/privatekey.pem', TRUE);

    $objDSig->sign($objKey);

    $objDSig->add509Cert(file_get_contents('secret/publicKey.pem'));

    $objDSig->appendSignature($doc->documentElement);
    $doc->save($fileName);
}
?>
