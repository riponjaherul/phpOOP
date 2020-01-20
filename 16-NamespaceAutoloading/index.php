<?php
// namespace Library;
require_once 'Files.php';
require_once 'Database.php';
// spl_autoload_register(function($className){
//     echo "Loading class: $className<br>";
//     require_once "$className.php";
// });

$files = new Library\Files();
$database = new Library\Database;
$files->uploadFile();
$database->SaveData();

/**
 * @Start => Step 1
 */
// $files = new Files();
// $database = new \Database; // This class does not under in Namespace 
// $files->uploadFile();
// $database->SaveData();
/**
 * @End => Step 1
 */