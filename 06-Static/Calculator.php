<?php
class Calculator{
    /**
     * Call $result and function add() as Static
     */
    static public $result;
    static function add(int $a, int $b){
        return $a + $b;
    }
    /**
     * Use Keyword "Self" to access self properties
     */
    static function multiply(int $a, int $b){
        self::$result = $a * $b;
    }
}
// Without use of "Self" Keyword
Calculator::$result = Calculator::add(3,2);
echo 'Sum = '.Calculator::$result.'<br>';
echo 'Sum = '.Calculator::add(9,2).'<br>';

// With use of "Self" Keyword
Calculator::multiply(3,2);
echo 'Multiply = '.Calculator::$result.'<br>';