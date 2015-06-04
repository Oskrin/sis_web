<?php

session_start();
include '../../procesos/base.php';
conectarse();
$arr_data = array();
error_reporting(0);

$consulta = pg_query("select id_comprobante,codigo,descripcion from sustento_comprobante ,tipo_comprobante where tipo_comprobante.id_tipo_comprobante = sustento_comprobante.id_comprobante and id_sustento = '".$_GET['id_sustento']."'");
while ($row = pg_fetch_row($consulta)) {
	$arr_data[] = $row[0];
    $arr_data[] = $row[1];
    $arr_data[] = $row[2];    
}
echo json_encode($arr_data);

?>
