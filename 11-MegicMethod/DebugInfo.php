<?php
class DebugInfo{

    private $id;
    private $name;
    public function __toString():string
    {
        /**
         * 1. the __toString() method allows a class to decide how it will react 
         * when it is treated like a string.
         * 2. If you echo an object then this function is called (This remove error)
         */
        return "To String method is called<br>";
    }

    // public function __debugInfo()
    // {
    //     echo "Taken the control to print the variables<br>";
    // }
}

$debugInfo = new DebugInfo;
echo $debugInfo;
var_dump($debugInfo);
