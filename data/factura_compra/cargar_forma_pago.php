<?php

session_start();
include '../../procesos/base.php';
conectarse();
$arr_data = array();
error_reporting(0);

$consulta = pg_query("select id_formas_pago, descripcion from formas_pago order by id_formas_pago asc");
while ($row = pg_fetch_row($consulta)) {
	$arr_data[] = $row[0];
    $arr_data[] = $row[1]; 
}
echo json_encode($arr_data);

?>
