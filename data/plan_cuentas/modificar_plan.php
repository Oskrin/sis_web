<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);

///////////////////contador clientes////////////////////////
$cont = 0;
$consulta = pg_query("select max(id_plan_cuentas) from plan_cuentas");
while ($row = pg_fetch_row($consulta)) {
    $cont = $row[0];
}
$cont++;
/////////////////////////////////////////////////////////
$repe = 0;
$sql = "select id_plan_cuentas from plan_cuentas where codigo_plan = '".$_POST['codigo_cuenta']."' and id_plan_cuentas not in ('".$_POST['id_plan_cuentas']."') ";

$sql = pg_query($sql);
while ($row = pg_fetch_row($sql)) {
    $repe = 1;
}
$sql = "select id_plan_cuentas from plan_cuentas where descripcion = '".$_POST['nombre_cuenta']."' and id_plan_cuentas not in ('".$_POST['id_plan_cuentas']."') ";

$sql = pg_query($sql);
while ($row = pg_fetch_row($sql)) {
    $repe = 3;
}
////////////////
if($repe > 0 ){
	$data = $repe;///repetido
}else{
	$sql = "update plan_cuentas set codigo_plan = '".$_POST['codigo_cuenta']."', descripcion = '".$_POST['nombre_cuenta']."',cuenta = '".$_POST['tipo_cuenta']."', estado = 'Activo' where id_plan_cuentas = '".$_POST['id_plan_cuentas']."'";
	if(pg_query($sql)){
		$data = 0;
	}else{
		$data = 2;/////////error
	}
}

echo $data;
?>
