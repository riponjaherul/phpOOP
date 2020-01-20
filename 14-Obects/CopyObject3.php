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

$a = new myClass();
$b = $a; // Copy by reference
$c = clone $a; // Clone => Copy by value
$d = &$a; // Alias of variable $a

echo '$a = ';var_dump($a);
echo '$b = ';var_dump($b);
echo '$c = ';var_dump($c);
echo '$c = ';var_dump($d);
$a->inc();
$b->inc();
$c->inc();
$c->inc();
$d->inc();
echo '$a (Original) = ';var_dump($a);
echo '$b (Cpoy) = ';var_dump($b);
echo '$c (Clone) = ';var_dump($c);
echo '$d (Alias) = ';var_dump($d);