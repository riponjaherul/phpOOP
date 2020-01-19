<?php
/**
     * 1. All Parent class Inject in child class, 
     *      So no need to Change in Parent Class, just change in Child Class
     * 2. This example of Dependancy Inection (Loosly Coupling) 
     */
class Course{
    public $cid;
    public function __construct(int $cid)
    {
        $this->cid = $cid;
    }
}

class Lesson extends Course{
    public $lid;
    public function __construct(int $lid, Course $courseObj)
    {
        $this->lid = $lid;
        $this->cid = $courseObj->cid;
    }
}

class Quiz extends Course{
    public $qid;
    public function __construct(int $qid, Course $courseObj)
    {
        $this->qid = $qid;
        $this->cid = $courseObj->cid;
    }
}

$course = new Course(1);
$lesson = new Lesson(10,$course);
$quiz = new Quiz(100,$course);
var_dump($lesson);