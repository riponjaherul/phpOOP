<?php
class Foo{
    public $val = null;
    public function __construct()
    {
        $this->val = 1;
    }
}

class Bar{
    public $val = null;
    public function __construct()
    {
        $this->val = 2;
    }
}
/**
 * In below line variable $a are reference of "FOO object"
 * IN Foo Object[Symbol Table] => is_ref = 0, ref_count = 1
 */
$a = new Foo();
var_dump($a);
/**
 * In below Line, variable $b is copy of variable $a (Not reference),
 * Variable $b also indicate reference of "FOO object"
 * IN Foo Object[Symbol Table] => is_ref = 0, ref_count = 2
 */
$b = $a;  
var_dump($b);
/**
 * In below line, variable $c is alias of variable $a, so it is identical
 * It is not reference of "FOO Object"
 */
$c = &$a;
var_dump($c);