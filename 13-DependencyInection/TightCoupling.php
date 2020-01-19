<?php
class Course{
    /**
     * 1. All Child class Inject in parent class, So all Change in Parent Class
     * 2. This example of Dependancy Inection (Tight Coupling)
     * 3. If Anyone add "New Class" in "Cource Class" then add obect in Course=>_construct method 
     */
    public $cid;
    public $lidObj;
    public $quizObj;
    public function __construct(int $cid, int $lid, int $qid)
    {
        $this->cid = $cid;
        $this->lidObj = new Lesson($lid,$cid);
        $this->quizObj = new Quiz($qid,$cid);
    }
}

class Lesson extends Course{
    public $lid;
    public function __construct(int $lid, int $cid)
    {
        $this->lid = $lid;
        $this->cid = $cid;
    }
}

class Quiz extends Course{
    public $qid;
    public function __construct(int $qid, int $cid)
    {
        $this->qid = $qid;
        $this->cid = $cid;
    }
}

$course = new Course(1,10,100);
var_dump($course->lidObj);