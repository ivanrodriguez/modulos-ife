<?php
error_reporting( E_ALL );
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://app-inter.ife.org.mx/siac2011/citasRPC_inicioRPC.siac');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json-rpc',
));

# Modulos por municipio
# ID Estado - ID Municipio
# {"params":["1","1"],"method":"buscarModulosPorEstadoMunicipio","id":1}
# ...
# {"params":["32","17"],"method":"buscarModulosPorEstadoMunicipio","id":1}

$str_json = file_get_contents('../json/estados.json');

$estados = json_decode($str_json);
$modulos = array();

foreach($estados as $estado) {
    foreach($estado->municipios as $municipio) {
        $params = '{"params":["' . $estado->id . '","' . $municipio->id . '"],"method":"buscarModulosPorEstadoMunicipio","id":1}';
        # var_dump($params);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);                                                                  
        $output = curl_exec($ch);
        # var_dump($output);
        $modulos_municipios = json_decode(utf8_encode($output));
        $modulos = array();
        foreach($modulos_municipios->result as $modulo_municipio) {
            if(count($modulo_municipio) != 4) {
                $id = $modulo_municipio[0];
                $numero_nombre = $modulo_municipio[1];
                $numero = substr($numero_nombre, 0, 6);
                $nombre = trim(preg_replace("/[0-9]*.-/", "", $numero_nombre));
                $direccion = $modulo_municipio[3];
                preg_match('/(C.P. )[0-9]*/', $direccion, $matches);
                $codigo_postal = substr($matches[0], 5);
                $direccion = preg_replace("/(, C.P. )[0-9]*(, LOC.).*/", "", $direccion);
                $referencia = $modulo_municipio[4];
                $modulo = array('id' => $id, 'numero' => $numero, 'nombre' => $nombre, 'direccion' => $direccion, 'codigo_postal' => $codigo_postal, 'referencia' => $referencia,);
                $modulos[] = $modulo;
                # var_dump($estado->id);
                # var_dump($municipio->id);
                # var_dump($modulo);
            }
        }
        $municipio->modulos = $modulos;
    }
}
curl_close($ch);

require('./pretty_json.php');
file_put_contents('../json/estados_modulos.json', indent(json_encode($estados)));

echo 'Listo en en estados_modulos.json';
