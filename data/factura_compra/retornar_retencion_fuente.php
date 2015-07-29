<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);
$id = $_GET['com'];
$arr_data = array();

$consulta = pg_query("SELECT F.id_retencion, R.porcentaje FROM relacion_retencion_fuente F, retenciones R WHERE F.id_retencion = R.id_retencion and F.id_proveedor = '" . $id . "'");
while ($row = pg_fetch_row($consulta)) {
    $arr_data[] = $row[0];
    $arr_data[] = $row[1];
}
echo json_encode($arr_data);
?>