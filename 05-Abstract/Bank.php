<?php
abstract class Bank{
    /**
     * A class called Abstract when it has al least one abstract method inside it.
     */
    abstract function checkBalance();
    /**
     * Abstract class as like as interface but they can have method implementation.
     */
    public function checkStatus()
    {
        echo 'All Branch of Bank is Opened at 9:30 AM<br>';
    }
}

class DhanmondiBranch extends Bank{
    /**
     * Method that are declared as Abstract must be define in child class.
     */
    public function checkBalance()
    {
        echo "Check Balance of Dhanmondi Branch<br>";
    }
}
/**
 * Class than we don not want to create object are defined as Abstract Class.
 */
// $obj = new Bank;
// $obj->checkStatus(); // this will show error
$obj = new DhanmondiBranch;
$obj->checkStatus();
$obj->checkBalance();