<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);

///////////////////contador clientes////////////////////////
$cont = 0;
$consulta = pg_query("select max(id_grupo) from grupo");
while ($row = pg_fetch_row($consulta)) {
    $cont = $row[0];
}
$cont++;
/////////////////////////////////////////////////////////

if (pg_query("insert into grupo values('$cont','$_POST[codigo_grupo]','$_POST[nombre_grupo]','$_POST[id_plan_cuentas]','Activo')")) {
    $data = 1;
}

echo $data;
?>
