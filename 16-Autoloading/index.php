<?php
spl_autoload_register(function($className){
    require_once "$className.php";
});

$files = new Files;
$database = new Database;
$files->uploadFile();
$database->SaveData();