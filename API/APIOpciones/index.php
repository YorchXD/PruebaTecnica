<?php
    include_once 'categoryAPI.php';
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin', '*');

    $api = new CategoryAPI();

    if($_GET['filter']=='')
    {
        $api->getAll();
    }
    else
    {
        $api->error('No se pueden aplicar filtros');
    }
?>