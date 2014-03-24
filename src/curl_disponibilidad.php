<?php
# error_reporting( E_ALL );
require './pretty_json.php';
header('Content-Type: application/json; charset=utf-8');

if (!isset($_GET['estado'])) {
    die(indent(json_encode(array('error' => 'Es requerido estado'))));
}
if (!isset($_GET['municipio'])) {
    die(indent(json_encode(array('error' => 'Es requerido modulo'))));
}
if (!isset($_GET['modulo'])) {
    die(indent(json_encode(array('error' => 'Es requerido municipio'))));
}
# Vielleicht etwas sanitize?
$estado = $_GET['estado'];
$municipio = $_GET['municipio'];
$modulo = $_GET['modulo'];

# TODO: Validar que existen dentro de los modulos (combinacion estado, municipio, modulo)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://app-inter.ife.org.mx/siac2011/citasRPC_inicioRPC.siac');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json-rpc',
));

# Fechas disponibles por modulo
# ID Estado - ID Municipio - ID Modulo
# {"params":["1","1","27"],"method":"buscarFechasDisponiblesDelModulo","id":1}
$data = '{"params":["' . $estado . '","' . $municipio .'","' . $modulo . '"],"method":"buscarFechasDisponiblesDelModulo","id":1}';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
$output = curl_exec($ch);
$output = json_decode(utf8_encode($output));
$output = $output->result;

if (!isset($_GET['fecha'])) {
    preg_match_all('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $output, $matches);
    $matches = $matches[0];
} else {
    $matches = array(($_GET['fecha']));
}

# Horarios disponibles para una fecha
# ID Estado - ID Municipio - ID Modulo - Fecha ()
# {"params":["1","1","27","01/04/2014"],"method":"buscarHorariosEnFechasDisponiblesDelModulo","id":1}
$horarios_disponibles = array();
$disponibilidades = array();
$horarios_disponibles['estado'] = $estado;
$horarios_disponibles['municipio'] = $municipio;
$horarios_disponibles['modulo'] = $modulo;
foreach($matches as $match) {
    $disponibilidad = array();
    $data = '{"params":["1","1","27","' . $match . '"],"method":"buscarHorariosEnFechasDisponiblesDelModulo","id":1}';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
    $output = curl_exec($ch);
    $output = json_decode(utf8_encode($output));
    $output = $output->result;
    $horarios = array();
    foreach($output as $hora) {
        $horarios[] = $hora[1];
    }
    $disponibilidad['fecha'] = $match;
    $disponibilidad['horarios'] = $horarios;
    $disponibilidades[] = $disponibilidad;
}
$horarios_disponibles['disponibilidades'] = $disponibilidades;
curl_close($ch);

echo indent(json_encode($horarios_disponibles));
