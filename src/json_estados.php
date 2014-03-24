<?
require './estados.php';

for($id_estado = 1; $id_estado <= 32; $id_estado++) {
    $estados[$id_estado]['nombre'] = $nombres_estados[$id_estado];
    $municipios = array();
    foreach($estados[$id_estado]['municipios'] as $municipio_dirty) {
        $municipio_clean = array();
        $municipio_clean['id'] = $municipio_dirty[0];
        $municipio_clean['nombre'] = $municipio_dirty[1];
        $municipios[] = $municipio_clean;
    }
    $estados[$id_estado]['municipios'] = $municipios;
}

require('./pretty_json.php');

# Venga macho, el fichero
$fichero = '../json/estados.json';
array_shift($estados);
file_put_contents($fichero, indent(json_encode($estados)));

echo 'Listo en en estados.json';
