<?php
class Parents{
    protected $fathersName = null;
    protected $mothersName = null;
    protected $addrsss = null;

    public function __construct(string $fName=null, string $mName=null,string $address = null){
        $this->fathersName = $fName;
        $this->mothersName = $mName;
        $this->addrsss = $address;
    }

    // This parent bedroom no one can access this 
    final function bedroom(){
        echo '<strong>This parents Bedroom</strong>';
    }

    // This parent Dining room everybody can access this 
    public function diningroom(){
        echo '<strong>This parents Dining Room</strong>';
    }

    public function display()
    {
        echo 'Father\'s Name = '.$this->fathersName.'<br>';
        echo 'Mother\'s Name = '.$this->mothersName.'<br>';
        echo 'Address = '.$this->addrsss.'<br>';
    }
}

class Children extends Parents{
    private $name = null;
    private $age = null;

    // Use Children info as Parameter and use Parents class as Deendency Injection
    public function __construct(string $name=null, string $age=null, Parents $parents){
        $this->name = $name;
        $this->age = $age;
        $this->fathersName = $parents->fathersName;
        $this->mothersName = $parents->mothersName;
        $this->addrsss = $parents->addrsss;
    }

    public function diningroom(){
        parent::diningroom();
        echo '<br><strong>Also access for children</strong>';
    }

    public function display(){
        echo 'Name = '.$this->name.'<br>';
        echo 'Age = '.$this->age.'<br>';
        echo 'Father\'s Name = '.$this->fathersName.'<br>';
        echo 'Mother\'s Name = '.$this->mothersName.'<br>';
        echo 'Address = '.$this->addrsss.'<br>';
    }
}

$parents = new Parents('Jasim Uddin','Sahanara Begum','Kishoregonj');
$childRipon = new Children('Ripon',29,$parents);
$childRipon->display();
$childRipon->diningroom();