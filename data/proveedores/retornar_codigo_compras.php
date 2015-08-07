<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);
$arr_data = array();

$consulta = pg_query("select RC.id_plan_cuentas, P.descripcion from plan_cuentas P, relacion_codigo_compras RC where P.id_plan_cuentas = RC.id_plan_cuentas and RC.id_proveedor = '$_GET[id]'");
while ($row = pg_fetch_row($consulta)) {
        $arr_data[] = $row[0];
        $arr_data[] = $row[1];
    }
    
echo json_encode($arr_data);
?>