<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);

///////////////////contador clientes////////////////////////
$data = 0;
//////////////////////////ver repetidos//////
$sql = pg_query("select id_sustento_tributario from sustento_tributario where codigo  = '".$_POST['codigo_sustento']."' and id_sustento_tributario not in ('".$_POST['id_sustento']."')");
if(pg_num_rows($sql)){
	$data = 2;/////codigo repetido
}else{
	$sql = pg_query("select id_sustento_tributario from sustento_tributario where descripcion  = '".$_POST['nombre_sustento']."' and id_sustento_tributario not in ('".$_POST['id_sustento']."')");
	if(pg_num_rows($sql)){
		$data = 3;///nombre rpetido
	}else{
		$sql = "update sustento_tributario set codigo='".$_POST['codigo_sustento']."',descripcion='".$_POST['nombre_sustento']."' where id_sustento_tributario = '".$_POST['id_sustento']."'";
		if(pg_query($sql)){
			$data = 1;///guardado
		}else{
			$data = 0;
		}
	}
}





echo $data;
?>