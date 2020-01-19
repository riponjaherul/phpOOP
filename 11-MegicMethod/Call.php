<?php
class Call{
    public function __call($name, $arguments)
    {
        /**
         * 1. If anybody can access private or unavailable method then this function catch it
         * 2. Parameter 1($name) : Name of declared function 
         * 2. Parameter 2($arguments) : Arguments of declared function 
         */
        echo "Function Name : $name<br>";
        echo "Argument List : ";
        // echo '<pre>';
        print_r($arguments);
        echo '<br>';
    }
}

$call = new Call;
/**
 * All test,test1,test2... function are not available in class Call
 */
$call->text();
echo '<br>------------<br>';
$call->text1(24);
echo '<br>------------<br>';
$call->text2(24,45,33);