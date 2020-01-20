<?php
trait DatabaseHelper{
    public function getRecordsByName($name)
    {
        return "Your Name is : $name";
    }
}

trait StringHelper{
    public function removeSpace(string $str)
    {
        // Remove space by php by default trim() function
        return trim($str);
    }
}

class Person{
    use DatabaseHelper;
    use StringHelper;

    public function processName()
    {
        $name = "Jaherul       Islam     Ripon";
        $name = $this->removeSpace($name);
        return $this->getRecordsByName($name);
    }
}

$person = new Person;
echo $person->processName();