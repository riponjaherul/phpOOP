<?php
class University{
    // Nobody can access this property except this class
    private $universityName = 'Jahangirnagar University';

    //Show university name
    public function displayName()
    {
        echo "University Name : $this->universityName<br>";
    }
}

class Teacher extends University{
    private $teacherName = 'Ripon';
    private $classTaken = 30;

    // Method is Overrired, but content is different
    public function displayName()
    {
        echo "Teacher Name : $this->teacherName<br>";
    }

    // Method is Overrired, but content is different
    public function calculateSalary(float $perClassAmount){
        $salary = number_format($this->classTaken * $perClassAmount,2);
        echo "Salary : $salary<br>";
    }
}

class ParttimeTeacher extends Teacher{
    private $teacherName = 'Touhid';
    private $classTaken = 7;

    // Method is Overrired, but content is different
    public function displayName()
    {
        echo "Part Teacher Name : $this->teacherName<br>";
    }

    public function calculateSalary(float $perClassAmount){
        $salary = number_format($this->classTaken * $perClassAmount,2);
        echo "Salary : $salary<br>";
    }
}

try{
    $university = new University();
    $teacher = new Teacher();
    $university->displayName();
    $teacher->displayName();
    $teacher->calculateSalary(2000);
    echo '<br>---------<br>';
    $partTimeTeacher = new ParttimeTeacher();
    $university->displayName();
    $partTimeTeacher->displayName();
    $partTimeTeacher->calculateSalary(1400);
}catch(Exception $e){
    echo $e->getMessage();
}