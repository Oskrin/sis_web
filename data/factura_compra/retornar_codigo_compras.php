<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);
$id = $_GET['com'];
$arr_data = array();

$consulta = pg_query("SELECT * FROM relacion_codigo_compras WHERE id_proveedor  ='" . $id . "'");
while ($row = pg_fetch_row($consulta)) {
    $arr_data[] = $row[0];
}
echo json_encode($arr_data);
?>
