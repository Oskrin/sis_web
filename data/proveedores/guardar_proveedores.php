<?php

session_start();
include '../../procesos/base.php';
conectarse();
error_reporting(0);

/////////////contador proveedores///////
$cont = 0;
$consulta = pg_query("select max(id_proveedor) from proveedores");
while ($row = pg_fetch_row($consulta)) {
    $cont = $row[0];
}
$cont++;
//////////////////////////////////////

/////////////contador codigo compras///////
$cont1 = 0;
$consulta = pg_query("select max(id_relacion_codigo_compras) from relacion_codigo_compras");
while ($row = pg_fetch_row($consulta)) {
    $cont1 = $row[0];
}
$cont1++;
//////////////////////////////////////

/////////////contador retencion fuente///////
$cont2 = 0;
$consulta = pg_query("select max(id_relacion_retencion_fuente) from relacion_retencion_fuente");
while ($row = pg_fetch_row($consulta)) {
    $cont2 = $row[0];
}
$cont2++;
//////////////////////////////////////

/////////////contador retencion iva///////
$cont3 = 0;
$consulta = pg_query("select max(id_relacion_retencion_iva) from relacion_retencion_iva");
while ($row = pg_fetch_row($consulta)) {
    $cont3 = $row[0];
}
$cont3++;
//////////////////////////////////////

// guardar proveedores
pg_query("insert into proveedores values('$cont','$_POST[tipo_docu]','$_POST[ruc_ci]','".strtoupper($_POST[empresa_pro])."','".strtoupper($_POST[representante_legal])."','".strtoupper($_POST[visitador])."','$_POST[direccion_pro]','$_POST[nro_telefono]','$_POST[nro_celular]','$_POST[fax]','".strtoupper($_POST[pais_pro])."','".strtoupper($_POST[ciudad_pro])."','$_POST[forma_pago]','$_POST[correo]','$_POST[principal_pro]','$_POST[tipo_pro]','$_POST[cupo_credito]','$_POST[observaciones_pro]','$_POST[sustento]','$_POST[comprobante]','$_POST[grupo]','$_POST[serie]','$_POST[autorizacion]','Activo')");

// guardar codigo compras
pg_query("insert into relacion_codigo_compras values('$cont1','$cont','$_POST[id_codigo_compras]','Activo')");

// guardar retencion fuente
pg_query("insert into relacion_retencion_fuente values('$cont2','$cont','$_POST[id_codigo_fuente]','Activo')");

// guardar retencion iva
pg_query("insert into relacion_retencion_iva values('$cont3','$cont','$_POST[id_codigo_iva]','Activo')");


$data = 1;
echo $data;
?>
