<?php
class University{
    protected $universityName;
    protected $universityAddress;

    public function __construct(string $universityName, string $universityAddress){
        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
    }
}

class Teacher extends University{
    protected $teacherName;
    protected $teacherAge;
    protected $teacherSubject;

    public function __construct(string $teacherName, int $teacherAge, string $teacherSubject, 
            University $university)
    {
        $this->teacherName = $teacherName;
        $this->teacherAge = $teacherAge;
        $this->teacherSubject = $teacherSubject;
        // Set University Data
        $this->universityName = $university->universityName;
        $this->universityAddress = $university->universityAddress;
    }
    public function helloTeacher()
    {
        echo "University Name : $this->universityName<br>";
        echo "University Address : $this->universityAddress<br>";
        echo "Teacher Name : $this->teacherName<br>";
        echo "Teacher Age : $this->teacherAge<br>";
        echo "Teacher Subject : $this->teacherSubject<br>";
    }
}

$university = new University('Jahangirnagar University','Savar');
$university1 = new University('Stamford University','Baily Road');
$techer1 = new Teacher('Ripon',29,'CSE',$university);
$techer1->helloTeacher();
echo '<br>------------------<br>';
$techer1 = new Teacher('Amit',30,'IT',$university);
$techer1->helloTeacher();
echo '<br>------------------<br>';
$techer1 = new Teacher('Touhid',35,'Physics',$university1);
$techer1->helloTeacher();
// echo $techer1->universityName;