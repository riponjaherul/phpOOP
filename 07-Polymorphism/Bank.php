<?php
interface Bank{
    /**
     * This class must imlements if any class implements this interface
     * After that it is called Polymorphism
     */
    public function address();
}

class DhanmondiBranch implements Bank{
    public function address(){
        echo 'Dhanmondi 10/A, Dhaka';
    }
}

class SavarBranch implements Bank{
    public function address(){
        echo 'Savar, Dhaka';
    }
}