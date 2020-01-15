<?php
class Student{
    private $id;
    private $name;
    private $class;

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setClass(string $class)
    {
        $this->class = $class;
        return $this;
    }

    public function getClass():string
    {
        return $this->class;
    }
}

$student = new Student;
$student->setId(101)->setName('Ripon')->setClass('Twelve');
echo "Id : ".$student->getId().'<br>';
echo "Name : ".$student->getName().'<br>';
echo "CLass : ".$student->getClass().'<br>';
echo '<br>---------------<br>';
$student1 = new Student;
$student1->setId(102)->setName('Touhid')->setClass('Ten');
echo "Id : ".$student1->getId().'<br>';
echo "Name : ".$student1->getName().'<br>';
echo "CLass : ".$student1->getClass().'<br>';