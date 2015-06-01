<?php

include '../../procesos/base.php';
conectarse();
$cont = 0;

/////////////contador empresa/////////////

$consulta = pg_query("select id_empresa from empresa order by id_empresa asc");
while ($row = pg_fetch_row($consulta)) {
    $cont = $row[0];
}
$cont++;

/////////////////////////////////
///////////////valores imagen//////////
$extension = explode(".", $_FILES["imagen_empresa"]["name"]);

$extension = end($extension);
$type = $_FILES["imagen_empresa"]["type"];
$tmp_name = $_FILES["imagen_empresa"]["tmp_name"];
$size = $_FILES["imagen_empresa"]["size"];
$nombre = basename($_FILES["imagen_empresa"]["name"], "." . $extension);
//////////////////////////

$foto = $cont . '.' . $extension;
move_uploaded_file($_FILES["imagen_empresa"]["tmp_name"], "logos/" . $foto);
$sql = "insert into empresa values('".$cont."','".$_POST['nombre_empresa']."','".$_POST['ruc_empresa']."','".$_POST['direccion_empresa']."','','".$_POST['celular_empresa']."','".$_POST['pais_provincia']."','".$_POST['ciudad_empresa']."','','".$_POST['correo_empresa']."','".$_POST['web_empresa']."','".$_POST['descripcion_empresa']."','".$foto."','Activo','".$_POST['propietario_empresa']."','".$_POST['cc_representante_legal']."','".$_POST['contador_empresa']."','".$_POST['cc_contador']."','".$_POST['serie_factura']."','".$_POST['autorizacion_factura']."','".$_POST['serie_retencion']."','".$_POST['autorizacion_retencion']."','".$_POST['serie_nota_credito']."','".$_POST['autorizacion_nota_credito']."')";

pg_query($sql);

$data = 1;
echo $data;
?>

