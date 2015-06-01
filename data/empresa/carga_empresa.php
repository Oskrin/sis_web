<?php

session_start();
include '../../procesos/base.php';
conectarse();

$arr_data = array();


$consulta = pg_query("select * from empresa");
while ($row = pg_fetch_row($consulta)) {
    $arr_data[] = $row[0];
    $arr_data[] = $row[1];
    $arr_data[] = $row[2];
    $arr_data[] = $row[3];
    $arr_data[] = $row[4];
    $arr_data[] = $row[5];
    $arr_data[] = $row[6];
    $arr_data[] = $row[7];
    $arr_data[] = $row[8];
    $arr_data[] = $row[9];
    $arr_data[] = $row[10];
    $arr_data[] = $row[11];
    $arr_data[] = $row[12];
    $arr_data[] = $row[13];
    $arr_data[] = $row[14];
    $arr_data[] = $row[15];
    $arr_data[] = $row[16];
    $arr_data[] = $row[17];
    $arr_data[] = $row[18];
    $arr_data[] = $row[19];
    $arr_data[] = $row[20];
    $arr_data[] = $row[21];
    $arr_data[] = $row[22];
    $arr_data[] = $row[23];

}



echo $data = json_encode($arr_data);
?>