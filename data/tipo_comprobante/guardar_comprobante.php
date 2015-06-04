<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);

///////////////////contador clientes////////////////////////
$cont = 0;
$data = 0;
$consulta = pg_query("select max(id_tipo_comprobante) from tipo_comprobante");
while ($row = pg_fetch_row($consulta)) {
    $cont = $row[0];
}
$cont++;
//////////////////////////ver repetidos//////
$sql = pg_query("select id_tipo_comprobante from tipo_comprobante where codigo = '".$_POST['codigo_comprobante']."'");
if(pg_num_rows($sql)){
	$data = 2;/////codigo repetido
}else{
	$sql = pg_query("select id_tipo_comprobante from tipo_comprobante where descripcion = '".$_POST['nombre_comprobante']."'");	
	if(pg_num_rows($sql)){
		$data = 3;///nombre rpetido
	}else{
		$sql = "insert into tipo_comprobante values ('".$cont."','".$_POST['codigo_comprobante']."','".$_POST['nombre_comprobante']."','Activo')";
		if(pg_query($sql)){
			$data = 1;///guardado
		}else{
			$data = 0;
		}
	}
}





echo $data;
?>