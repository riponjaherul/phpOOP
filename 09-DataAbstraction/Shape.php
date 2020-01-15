<?php
abstract class Shape{
    protected $color = null;
    abstract function calculateArea();

    public function getColor():string
    {
        return $this->color;
    }
}

class Rectangle extends Shape{
    private $length;
    private $breath;

    public function __construct(string $color, float $length, float $breath)
    {
        $this->color = $color;
        $this->length = $length;
        $this->breath = $breath;
    }

    public function calculateArea()
    {
        return $this->length * $this->breath;
    }
}

class Circle extends Shape{
    private $radius;

    public function __construct(string $color, float $radius)
    {
        $this->color = $color;
        $this->radius = $radius;
    }

    public function calculateArea()
    {
       return $this->radius * 3.14;
    }
}

echo '----Rectangle Part-----------<br>';
$rectangle = new Rectangle('Black',10,6);
echo 'Area : '.$rectangle->calculateArea().'<br>';
echo 'Color : '.$rectangle->getColor().'<br>';
echo '<br><br>----Trianle Part-----------<br>';
$circle = new Circle('Black',10);
echo 'Area : '.$circle->calculateArea().'<br>';
echo 'Color : '.$circle->getColor().'<br>';