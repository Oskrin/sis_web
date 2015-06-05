<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);

///////////////////contador clientes////////////////////////
$cont = 0;
$consulta = pg_query("select max(id_retencion_fuente) from retencion_fuentes");
while ($row = pg_fetch_row($consulta)) {
    $cont = $row[0];
}
$cont++;
/////////////////////////////////////////////////////////

if (pg_query("insert into retencion_fuentes values('$cont','$_POST[codigo_anexo]','$_POST[formulario]','$_POST[porcentaje]','$_POST[detalle]','','','$_POST[id_plan_cuentas]','Activo')")) {
    $data = 1;
}

echo $data;
?>
