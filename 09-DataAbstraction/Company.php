<?php
abstract class Company{
    /**
     * By Default, Set and get name for all Extented Class 
     */
    protected $name = null;
    public function setName(string $name){
        $this->name = $name;
    }
    public function getName():string{
        return $this->name;
    }
    /**
     * Change content  in expert function
     */
    abstract function setExpert(string $subect);
}

class Employee extends Company{
    public function setExpert(string $subect)
    {
        return $subect;
    }
}

$employee = new Employee;
$employee->setName('Ripon');
echo 'Name : '.$employee->getName().'<br>';
echo 'Expert In : '.$employee->setExpert('CSE').'<br>';
echo '<br>------------<br>';
$employee = new Employee;
$employee->setName('Kafi');
echo 'Name : '.$employee->getName().'<br>';
echo 'Expert In : '.$employee->setExpert('Arabic').'<br>';