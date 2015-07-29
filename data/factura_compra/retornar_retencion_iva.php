<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);
$id = $_GET['com'];
$arr_data = array();

$consulta = pg_query("SELECT I.id_retencion, R.codigo_anexo, R.porcentaje FROM relacion_retencion_iva I, retenciones R WHERE I.id_retencion = R.id_retencion and I.id_proveedor ='" . $id . "'");
while ($row = pg_fetch_row($consulta)) {
    $arr_data[] = $row[0];
    $arr_data[] = $row[1];
    $arr_data[] = $row[2];
}
echo json_encode($arr_data);
?>