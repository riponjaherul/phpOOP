<?php
class Files{
    private $fileData = null;
    private $fileFound = false;
    private $fileSize = null;
    public function __construct($file)
    {
        // Check file validation
        if(!file_exists($file) || !is_file($file)){
            echo 'File is not available!<br>';
            return;
        }
        /**
         * Open file and set file data with size
         */
        $this->fileData = fopen($file, "r");
        $this->fileSize = filesize($file);
        $this->fileFound = true;
    }

    public function getContent()
    {
        if(!$this->fileFound){
            echo 'File is not available!<br>';
            return;
        }
        return fread($this->fileData,$this->fileSize).'<br>';
    }

    /**
     * In Destructor, Opened file be closed
    */
    public function __destruct()
    {
        if($this->fileFound){
            fclose($this->fileData);
            echo 'File is closed in destructor!<br>';
        }
    }
}

$file = new Files('Bank.php');
echo $file->getContent();