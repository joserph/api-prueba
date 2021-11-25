<?php

$status = array(
    'apikey'=>'hSD73nV6jhk8dg2JHgcjl@fqxj8WjeOFCPAjhekL7sn3',
    'uid'=>'797979',										
    'documento'=>'0102698867',								// CEDULA, PERSONA JURIDICA = RUC
    'tipo_solicitud'=>'PERSONA NATURAL'					// PERSONA NATURAL, REPRESENTANTE LEGAL, MIEMBRO DE EMPRESA, PERSONA JURIDICA
);

$url = 'https://api.uanataca.ec/v4/consultarEstado';
$ch = curl_init( $url );
# Setup request to send json via POST.
$payload = json_encode($status);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
//print_r($result);
$data = json_decode($result, true);
$datos = $data['data']['solicitudes'];

print_r($datos);


?>