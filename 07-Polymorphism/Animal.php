<?php
interface Animal{
    function makeSound();
}

class Dog implements Animal{
    /**
     * use makeSound() function, As called Polymorphism  
     */
    public function makeSound()
    {
        echo 'Wow wow....<br>';
    }
}

class Cat implements Animal{
    /**
     * use makeSound() function, As called Polymorphism  
     */
    public function makeSound()
    {
        echo 'Maw Maw....<br>';
    }
}

$dog = new Dog;
$cat = new Cat;
$dog->makeSound();
$cat->makeSound();
