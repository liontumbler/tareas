<?php
/*
29.Tenemos el siguiente servicio que la información dada un IP y una licencia ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl

Debe construir un programa en PHP que solicite los parámetros de consulta, realice la consulta al webservice de la información de la IP y muestre por pantalla el resultado obtenido, incluir en la respuesta el resultado obtenido

Datos de prueba: 
ipAddress => 95.23.148.203
licenseKey => 0
*/
if (isset($_POST['ipAddress']) && isset($_POST['licenseKey'])) {
    $url = 'http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl';
    $options = [
        'cache_wsdl'     => 0,
        'trace'          => 1,
        'stream_context' => stream_context_create(
            [
                'ssl' => [
                    'verify_peer'       => false,
                    'verify_peer_name'  => false,
                    'allow_self_signed' => true
                ]
            ]
        )
    ];

    $client = new SoapClient($url, $options);

    $d = array(
        "ipAddress" => $_POST['ipAddress'],//'95.23.148.203',
        "licenseKey" => $_POST['licenseKey'],//'0',
    );
    $result = $client->ResolveIP($d);

    /*
    var_dump($client);
    echo '<br>';
    echo '<br>';
    */
    print_r(json_encode($result->ResolveIPResult));

    //echo '<br>';
    //echo json_encode($result->ResolveIPResult);

}else
    echo 'error de envio de datos';

