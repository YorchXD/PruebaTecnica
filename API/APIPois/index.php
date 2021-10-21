<?php
    include_once 'poisAPI.php';
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin', '*');

    $api = new PoisAPI();

    if($_GET['filter']!='')
    {
        $api->getCategory($_GET['filter']);
    }
    else
    {
        $api->getAll();
    }
?>