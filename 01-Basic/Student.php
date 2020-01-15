<?php
class Student{
    public $marks = [];

    public function __construct(array $marks = null)
    {
        $this->marks = $marks;
    }
    /**
     * 1. examResults() method accepts 3 subjects marks
     * 2. Passing Marks for each exam is 35 and Maximum Marks is 100 for each subject.
     */
    public function examResult()
    {
        $totalMarks = 0;
        $totalSubject = count($this->marks);
        if($totalSubject < 0){
            echo 'No marks are available!<br>';
            return;
        }
        if($totalSubject > 3){
            echo 'Subject marks is greather than 3!<br>';
            return;
        }
        for($i=0; $i<$totalSubject; $i++){
            if($this->marks[$i] > 100){
                echo 'Marks is greather than 100!<br>';
                return;
            }
            if($this->marks[$i] < 35){
                echo 'You are failed, mark is less than 35!<br>';
                return;
            }
            $totalMarks += $this->marks[$i];
        }
        echo 'You are passed!<br>';
        echo 'Total Marks = '.$totalMarks.'<br>';
        echo 'Average Marks = '.round($totalMarks/$totalSubject,2);
    }
}

try{
    $student = new Student([18,23]);
    $student->examResult();
    echo '<br>---------------<br>';
    $student1 = new Student([38,41,73]);
    $student1->examResult();
    echo '<br>---------------<br>';
    $student2 = new Student([71,35,82]);
    $student2->examResult();
    echo '<br>---------------<br>';
    $student2 = new Student([71,35,103]);
    $student2->examResult();
}catch(Exception $e){
    echo $e->getMessage();
}