<?php
/**
 * 1. You forget to call Getter Or Setter Method
 * 2. If Anyone can try to access to your private variable then you catch in __set() or __get() Method
 */
class SetGet{
    private $id;

    public function __set($name,$value)
    {
        echo 'Set method does not found, so it called<br>';
        echo "Name : $name<br>";
        echo "Name : $value<br>";
    }

    public function __get($name)
    {
        echo 'Get method does not found, so it called<br>';
        echo "Name : $name<br>";
    }
}

$setGet = new SetGet;
$setGet->id = 45;
$setGet->name = 'Ripon';
echo $setGet->id;
echo $setGet->name;
