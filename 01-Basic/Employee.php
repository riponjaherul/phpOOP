<?php
class Employee{
    public $name = null;
    public $month = null;
    public $monthDays = null;
    public $salaryAmount = 0;
    private $activeDays = 0;
    private $paySalary = 0;

    /**
     * Calculate employee salary with uses of absent and late
     * 1 Days Salary cut off if employee have 3 lates
     */
    public function calculateSalary(int $absent=0,int $late=0)
    {
        $this->activeDays = $this->monthDays - ($absent+(int)($late/3));
        $paySalary = $this->activeDays * $this->salaryAmount/$this->monthDays;
        // @number_format php by default function, it is format salary amount
        $this->paySalary = number_format($paySalary,2);
        return $this;
    }

    public function display()
    {
        echo 'Name = '.$this->name.'<br>';
        echo 'Month = '.$this->month.'<br>';
        echo 'Active Days = '.$this->activeDays.'<br>';
        echo 'Salary = '.$this->paySalary.'<br>';
    }
}

$employee = new Employee;
$employee->name = 'Ripon';
$employee->month = 'January';
$employee->monthDays = 31;
$employee->salaryAmount = 27500;
$employee->calculateSalary(1,1);
$employee->display();
echo '<br>---------------<br>';
$employee1 = new Employee;
$employee1->name = 'Majumder';
$employee1->month = 'February';
$employee1->monthDays = 28;
$employee1->salaryAmount = 32000;
$employee1->calculateSalary(0,5);
$employee1->display();
echo '<br>---------------<br>';
$employee2 = new Employee;
$employee2->name = 'Akram';
$employee2->month = 'November';
$employee2->monthDays = 30;
$employee2->salaryAmount = 14500;
$employee2->calculateSalary(2,0);
$employee2->display();