<?php
# CURLing is an olympic game
error_reporting( E_ALL );
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://app-inter.ife.org.mx/siac2011/citasRPC_inicioRPC.siac');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json-rpc',
));
# Municipios por estado
# $data = '{"params":["1"],"method":"buscarMunicipiosPorEstado","id":1}';
# ...
# $data = '{"params":["32"],"method":"buscarMunicipiosPorEstado","id":1}';
$arr_idsestados = range(1,32);
$arr_estados = array();
foreach($arr_idsestados as $idestado) {
    $params = '{"params":["' . $idestado . '"],"method":"buscarMunicipiosPorEstado","id":1}';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);                                                                  
    $output = curl_exec($ch);
    $arr_estados[] = $output;
}
curl_close($ch);
echo '<pre>';
echo '[';
foreach($arr_estados as $estado) {
    echo $estado . ',';
}
echo ']';
echo '</pre>';
