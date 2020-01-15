<?php
// Assignment: Phone Interface and iOS and Android Class has same methods Diff Implementation
interface Phone{
    function checkCallHistory();
}

class IOS implements Phone{
    /**
     * use checkCallHistory() function, As called Polymorphism  
     */
    public function checkCallHistory()
    {
        echo 'Check call History in IOS phone<br>';
    }
}

class Android implements Phone{
     /**
     * use checkCallHistory() function, As called Polymorphism  
     */
    public function checkCallHistory()
    {
        echo 'Check call History in Android phone<br>';
    }
}

$ios = new IOS;
$android = new Android;
$ios->checkCallHistory();
$android->checkCallHistory();