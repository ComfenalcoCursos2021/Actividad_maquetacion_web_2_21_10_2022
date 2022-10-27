<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');

    $_JSON = json_decode(file_get_contents("config.json"));
    $_JSON->servidor = $_SERVER['HTTP_HOST'];
    echo json_encode($_JSON, JSON_PRETTY_PRINT);
?>