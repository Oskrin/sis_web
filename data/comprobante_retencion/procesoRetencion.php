<?php
session_start();
include '../../procesos/base.php';
conectarse();
$cont = 0;
$repe = 0;

//////////////////validar repetidos//////////////////
$consulta = pg_query("select * from comprobante_retencion where num_secuencial='" . $_POST['num_secuencial'] . "'");
while ($row = pg_fetch_row($consulta)) {
   $repe++;
}
//////////////////////////////////////////////////    

if ($_POST['oper'] == "add") {
    $consulta = pg_query("select max(id_comprobante_retencion) from comprobante_retencion");
    while ($row = pg_fetch_row($consulta)) {
        $cont = $row[0];
    }
    $cont++;

    if ($repe == 0) {
        pg_query("insert into comprobante_retencion values('$cont','$_POST[establecimiento]', '$_POST[punto_emision]','$_POST[num_secuencial]','$_POST[num_autorizacion]','Activo')");
    }
} else {
    if ($_POST['oper'] == "edit") {
        pg_query("update comprobante_retencion set establecimiento = '$_POST[establecimiento]', punto_emision = '$_POST[punto_emision]', num_secuencial = '$_POST[num_secuencial]', num_autorizacion = '$_POST[num_autorizacion]' where id_comprobante_retencion='$_POST[id_comprobante_retencion]'");
        
    }
}
?>