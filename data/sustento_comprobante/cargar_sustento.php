<?php

session_start();
include '../../procesos/base.php';
conectarse();
$arr_data = array();
error_reporting(0);
$consulta = pg_query("select id_sustento_tributario,codigo,descripcion from sustento_tributario order by id_sustento_tributario asc");
while ($row = pg_fetch_row($consulta)) {
	$arr_data[] = $row[0];
    $arr_data[] = $row[1];
    $arr_data[] = $row[2];    
}
echo json_encode($arr_data);

?>
