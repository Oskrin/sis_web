<?php

session_start();
include '../../procesos/base.php';
conectarse();
$texto = $_GET['term'];
$consulta = pg_query("select * from retencion_fuentes where codigo_anexo like '%$texto%' and estado='Activo'");
while ($row = pg_fetch_row($consulta)) {
    $data[] = array(
        'value' => $row[1],
        'id_retencion_fuente1' => $row[0]
    );
}

echo $data = json_encode($data);
?>
