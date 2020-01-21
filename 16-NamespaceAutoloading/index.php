<?php
namespace Library;
include_once 'vendor/autoload.php';

$files = new Files();
$database = new Database;
$string = new String\StringOperation;
$files->uploadFile();
$database->SaveData();
$string->hello();

/**
 * @Start => Step 1
 */
/**
 * If any class not under namespace(if use namespace in declared class), then use
 * Backward Slash(\) to call this class
 */
// $files = new Files();
// $database = new \Database;
// $files->uploadFile();
// $database->SaveData();
/**
 * @End => Step 1
 */