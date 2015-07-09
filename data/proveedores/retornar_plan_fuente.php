<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);
$arr_data = array();

$consulta = pg_query("select RCC.id_plan_cuentas, PC.descripcion, RRF.id_retencion_fuente, RF.codigo_anexo from plan_cuentas PC, retencion_fuentes RF, relacion_codigo_compras RCC, relacion_retencion_fuente RRF where PC.id_plan_cuentas = RCC.id_plan_cuentas and RF.id_retencion_fuente = RRF.id_retencion_fuente and RCC.id_proveedor='$_GET[id]' and RRF.id_proveedor='$_GET[id]'");
while ($row = pg_fetch_row($consulta)) {
        $arr_data[] = $row[0];
        $arr_data[] = $row[1];
        $arr_data[] = $row[2];
        $arr_data[] = $row[3];
    }
echo json_encode($arr_data);
?>