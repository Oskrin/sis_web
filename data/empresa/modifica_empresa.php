<?php

include '../../procesos/base.php';
conectarse();
$cont = 0;

/////////////contador empresa/////////////


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

if ($nombre == ""  ) {
    $sql = "update empresa set id_empresa='".$_POST['id_empresa']."',nombre_empresa='".$_POST['nombre_empresa']."',ruc_empresa='".$_POST['ruc_empresa']."',direccion_empresa='".$_POST['direccion_empresa']."',telefono_empresa='',celular_empresa='".$_POST['celular_empresa']."',pais_empresa='".$_POST['pais_provincia']."',ciudad_empresa='".$_POST['ciudad_empresa']."',fax_empresa='',email_empresa='".$_POST['correo_empresa']."',pagina_web='".$_POST['web_empresa']."',descripcion='".$_POST['descripcion_empresa']."',estado='Activo',representante_legal='".$_POST['propietario_empresa']."',cc_representante_legal='".$_POST['cc_representante_legal']."',contador='".$_POST['contador_empresa']."',ruc_contador='".$_POST['cc_contador']."',serie_factura='".$_POST['serie_factura']."',autorizacion_factura='".$_POST['autorizacion_factura']."',serie_retencion='".$_POST['serie_retencion']."',autorizacion_retencion='".$_POST['autorizacion_retencion']."',serie_nota_credito='".$_POST['serie_nota_credito']."',autorizacion_nota_credito='".$_POST['autorizacion_nota_credito']."' where id_empresa= '".$_POST['id_empresa']."'";        
    pg_query($sql);

} else {
    $foto = $_POST['id_empresa'] . '.' . $extension;
    move_uploaded_file($_FILES["imagen_empresa"]["tmp_name"], "logos/" . $foto);
	$sql = "update empresa set id_empresa='".$_POST['id_empresa']."',nombre_empresa='".$_POST['nombre_empresa']."',ruc_empresa='".$_POST['ruc_empresa']."',direccion_empresa='".$_POST['direccion_empresa']."',telefono_empresa='',celular_empresa='".$_POST['celular_empresa']."',pais_empresa='".$_POST['pais_provincia']."',ciudad_empresa='".$_POST['ciudad_empresa']."',fax_empresa='',email_empresa='".$_POST['correo_empresa']."',pagina_web='".$_POST['web_empresa']."',descripcion='".$_POST['descripcion_empresa']."',imagen='".$foto."',estado='Activo',representante_legal='".$_POST['propietario_empresa']."',cc_representante_legal='".$_POST['cc_representante_legal']."',contador='".$_POST['contador_empresa']."',ruc_contador='".$_POST['cc_contador']."',serie_factura='".$_POST['serie_factura']."',autorizacion_factura='".$_POST['autorizacion_factura']."',serie_retencion='".$_POST['serie_retencion']."',autorizacion_retencion='".$_POST['autorizacion_retencion']."',serie_nota_credito='".$_POST['serie_nota_credito']."',autorizacion_nota_credito='".$_POST['autorizacion_nota_credito']."' where id_empresa= '".$_POST['id_empresa']."'";        
	pg_query($sql);
}



pg_query($sql);

$data = 1;
echo $data;
?>
