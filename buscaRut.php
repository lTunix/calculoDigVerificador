<?php

if (isset($_REQUEST["rut"])) {
    $rut = $_REQUEST["rut"];
} else {
    echo '<table id="tblBuscaRut2" align="center">';
    echo '<tr>No existe data.</tr>';
    echo '</table>';
    die;
}

$ch = curl_init("https://www.nombrerutyfirma.com/busca_rut?term=" . $rut);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$page = curl_exec($ch);

preg_match('#<table[^>]*>(.+?)</table>#is', $page, $matches);
foreach ($matches as &$match) {
    $match = $match;
}
echo '<table id="tblBuscaRut2" align="center">';
echo $matches[1];
echo '</table>';
