<?php

session_start();
include '../../procesos/base.php';
$page = $_GET['page'];
$limit = $_GET['rows'];
$sidx = $_GET['sidx'];
$sord = $_GET['sord'];
$search = $_GET['_search'];

if (!$sidx)
    $sidx = 1;
$result = pg_query("SELECT COUNT(*) AS count FROM retenciones");
$row = pg_fetch_row($result);
$count = $row[0];
if ($count > 0 && $limit > 0) {
    $total_pages = ceil($count / $limit);
} else {
    $total_pages = 0;
}
if ($page > $total_pages)
    $page = $total_pages;
$start = $limit * $page - $limit;
if ($start < 0)
    $start = 0;
if ($search == 'false') {
    $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' ORDER BY $sidx $sord offset $start limit $limit";
} else {
    if ($_GET['searchOper'] == 'eq') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and  $_GET[searchField] = '$_GET[searchString]' ORDER BY $sidx $sord offset $start limit $limit";
        // $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] = '$_GET[searchString]' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'ne') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] != '$_GET[searchString]' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'bw') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] like '$_GET[searchString]%' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'bn') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] not like '$_GET[searchString]%' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'ew') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] like '%$_GET[searchString]' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'en') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] not like '%$_GET[searchString]' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'cn') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] like '%$_GET[searchString]%' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'nc') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] not like '%$_GET[searchString]%' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'in') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] like '%$_GET[searchString]%' ORDER BY $sidx $sord offset $start limit $limit";
    }
    if ($_GET['searchOper'] == 'ni') {
        $SQL = "SELECT  * FROM retenciones  R, plan_cuentas P where R.id_plan_cuentas = P.id_plan_cuentas and R.estado='Activo' and $_GET[searchField] not like '%$_GET[searchString]%' ORDER BY $sidx $sord offset $start limit $limit";
    }
}

$result = pg_query($SQL);
header("Content-type: text/xml; charset = utf-8");
$s = "<?xml version='1.0' encoding='utf-8'?>";
$s .= "<rows>";
$s .= "<page>" . $page . "</page>";
$s .= "<total>" . $total_pages . "</total>";
$s .= "<records>" . $count . "</records>";
while ($row = pg_fetch_row($result)) {
    $s .= "<row id='" . $row[0] . "'>";
    $s .= "<cell>" . $row[0] . "</cell>";
    $s .= "<cell>" . $row[1] . "</cell>";
    $s .= "<cell>" . $row[2] . "</cell>";
    $s .= "<cell>" . $row[3] . "</cell>";
    $s .= "<cell>" . $row[4] . "</cell>";
    $s .= "<cell>" . $row[7] . "</cell>";
    $s .= "<cell>" . $row[11] . "</cell>";
    $s .= "</row>";
}

$s .= "</rows>";
echo $s;
?>