<?php

include '../../procesos/base.php';
conectarse();
error_reporting(0);
$arr_data = array();

$consulta = pg_query("SELECT * FROM comprobante_retencion");
while ($row = pg_fetch_row($consulta)) {
    $arr_data[] = $row[1];
    $arr_data[] = $row[2];
    $arr_data[] = $row[3];
    $arr_data[] = $row[4];
}
echo json_encode($arr_data);
?>
