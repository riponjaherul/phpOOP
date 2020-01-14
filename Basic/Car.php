<?php
class Car{
    private $brand;
    private $plateNumber;
    private $runningStatus = false;
    private $speed;

    public function setBrand(string $brand){
        $this->brand = $brand;
        return $this;
    }

    public function setPlateNumber(string $plateNumber){
        $this->plateNumber = $plateNumber;
        return $this;
    }

    public function startCar()
    {
        $this->runningStatus = true;
        $this->speed = 0;
        return $this;
    }

    public function stopCar()
    {
        $this->runningStatus = false;
        $this->speed = 0;
        return $this;
    }

    public function increaseSpeed()
    {
        if(!$this->runningStatus){
            echo 'Car does not start yet!<br>';
            return;
        }
        $this->speed += 10;
        return $this;
    }

    public function decreaseSpeed()
    {
        if(!$this->runningStatus){
            echo 'Car does not start yet!<br>';
            return;
        }
        if($this->speed<1){
            echo 'Now, Car are parking!<br>';
            return;
        }
        $this->speed -= 10;
        return $this;
    }

    public function carStatus()
    {
        echo "Brand : $this->brand<br>";
        echo "Plate Number : $this->plateNumber<br>";
        if($this->runningStatus){
            echo "Now car on running mode<br>";
            echo "Speed : $this->speed";
        }
    }
}

try{
    $car1 = new Car();
    $car1->setBrand('Toyata')->setPlateNumber('101')->startCar();
    $car1->increaseSpeed()->increaseSpeed()->increaseSpeed()->decreaseSpeed();
    $car1->carStatus();
    echo '<br>---------------<br>';
    $car2 = new Car();
    $car2->setBrand('Hundai')->setPlateNumber('201');
    $car2->increaseSpeed();
    $car2->carStatus();
}catch(Exception $e){
    echo $e->getMessage();
}