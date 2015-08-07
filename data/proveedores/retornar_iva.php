<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);
$arr_data = array();

$consulta = pg_query("select RRI.id_retencion, RF.codigo_anexo from retenciones RF, relacion_retencion_iva RRI where RF.id_retencion = RRI.id_retencion and RRI.id_proveedor = '$_GET[id]'");
while ($row = pg_fetch_row($consulta)) {
        $arr_data[] = $row[0];
        $arr_data[] = $row[1];
    }
    
echo json_encode($arr_data);
?>