<?php
session_start();
require_once __DIR__ . "/../../vendor/autoload.php";
if(!isset($_SERVER['QUERY_STRING'])){
    $_SERVER['QUERY_STRING'] = "page=1";
}

$lib_name = [
    'DB1',
    'Functions',
    'Account'
];


foreach ($lib_name as $file) {
    require_once __DIR__ . "/" . $file . ".php";
}