<?php
class Files{
    public function displayContent($file)
    {   
        if(!file_exists($file)){
            echo 'No File contain here!<br>';
            return;
        }
        echo file_get_contents($file);
    }
}

$file = new Files();
$file->displayContent('Bank.php');