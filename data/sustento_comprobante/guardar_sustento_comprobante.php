<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);

///////////////////contador clientes////////////////////////
$cont = 0;
$data = 0;
$consulta = pg_query("select max(id_sustento_comprobante) from sustento_comprobante");
while ($row = pg_fetch_row($consulta)) {
    $cont = $row[0];
}
$cont++;
//////////////////////////ver repetidos//////
$sql = pg_query("select * from sustento_comprobante where id_sustento = '".$_POST['id_sustento']."' and id_comprobante = '".$_POST['id_comprobante']."'");
if(pg_num_rows($sql)){
	$data = 2;/////codigo repetido
}else{	
	$sql = "insert into sustento_comprobante values ('".$cont."','".$_POST['id_sustento']."','".$_POST['id_comprobante']."')";
	if(pg_query($sql)){
		$data = 1;///guardado
	}else{
		$data = 0;
	}	
}





echo $data;
?>