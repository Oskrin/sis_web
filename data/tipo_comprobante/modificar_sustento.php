<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);

///////////////////contador clientes////////////////////////
$data = 0;
//////////////////////////ver repetidos//////
$sql = pg_query("select id_tipo_comprobante from tipo_comprobante where codigo  = '".$_POST['codigo_comprobante']."' and id_tipo_comprobante not in ('".$_POST['id_comprobante']."')");
if(pg_num_rows($sql)){
	$data = 2;/////codigo repetido
}else{
	$sql = pg_query("select id_tipo_comprobante from tipo_comprobante where descripcion  = '".$_POST['nombre_comprobante']."' and id_tipo_comprobante not in ('".$_POST['id_comprobante']."')");
	if(pg_num_rows($sql)){
		$data = 3;///nombre rpetido
	}else{
		$sql = "update tipo_comprobante set codigo='".$_POST['codigo_comprobante']."',descripcion='".$_POST['nombre_comprobante']."' where id_tipo_comprobante = '".$_POST['id_comprobante']."'";
		if(pg_query($sql)){
			$data = 1;///guardado
		}else{
			$data = 0;
		}
	}
}





echo $data;
?>