<?php
class Doctor{
    private $chargeAmount = 500;
    function calculateFee(int $hours){
        return round($hours * $this->chargeAmount,2);
    }
}

class Specialst extends Doctor{
    private $chargeAmount = 1000;
    /**
     * This method is override from parent class
     */
    function calculateFee(int $hours){
        return round($hours * $this->chargeAmount,2);
    }
}

$doctor = new Doctor;
$specialst = new Specialst;
echo 'Doctor Amount : '.$doctor->calculateFee(20).'<br>';
echo 'Specialist Amount : '.$specialst->calculateFee(11);