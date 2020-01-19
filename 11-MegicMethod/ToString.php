<?php
class ToString{

    public function __toString():string
    {
        /**
         * 1. the __toString() method allows a class to decide how it will react 
         * when it is treated like a string.
         * 2. If you echo an object then this function is called (This remove error)
         */
        return "To String method is called<br>";
    }
}

$toString = new ToString;
echo $toString;