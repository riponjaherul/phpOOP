<?php
class myClass{
    public $var;

    public function __construct()
    {
        $this->var = 1;
    }

    public function inc()
    {
        return ++$this->var;
    }
}

$a = new myClass(); // $a "references" a Foo object
$b = $a; //b also references the same Foo object as a
//($a) == ($b) == <id> of Foo object, but a and b are different entries in symbols table

echo '$a = ';var_dump($a);
echo '$b = ';var_dump($b);

$c = &$a; //$c is an alias of $a
//($a, $c) == <id> of Foo object, c is an alias of a in the symbols table
echo '$c = ';var_dump($c);

$a = NULL;
//The entry in the symbols table which links "$a" with Foo object is removed
//Since that entry was removed, $c is not related to Foo anymore
//Anyway, Foo still exists in memory and it is still linked by $b
echo '$a = ';var_dump($a);
echo '$b = ';var_dump($b);
echo '$c = ';var_dump($c);
echo '$b->var: '.$b->inc().'<br>';
echo '$b->var: '.$b->inc().'<br>';
$b = NULL;
//The entry in the symbols table which links "$b" with the Foo object is removed
//There are no more entries in the symbols table linked to Foo,
//So, Foo is not referenced anymore and can be deleted by the garbage collector
echo '$b = ';var_dump($b);

/**
 * The output produced by the implementation of the script above is:
 * $a = object(myClass)#1 (1) { ["var"]=> int(1) } 
 * $b = object(myClass)#1 (1) { ["var"]=> int(1) } 
 * $c = object(myClass)#1 (1) { ["var"]=> int(1) } 
 * $a = NULL 
 * $b = object(myClass)#1 (1) { ["var"]=> int(1) } 
 * $c = NULL 
 * $b->var: 2
 * $b->var: 3
 * $b = NULL
 */