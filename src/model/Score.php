<?php

namespace App\model;


class Score
{
    public $id;
    public $subject_id;
    public $student_id;
    public $score;
    public $coefficient;


    public function __construct($subject_id, $student_id, $score, $coefficient)
    {
        $this->subject_id = $subject_id;
        $this->student_id = $student_id;
        $this->score = $score;
        $this->coefficient = $coefficient;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSubjectId()
    {
        return $this->subject_id;
    }

    public function setSubjectId($subject)
    {
        $this->subject_id = $subject;
    }

    public function getStudentId()
    {
        return $this->student_id;
    }

    public function setStudentId($student)
    {
        $this->student_id = $student;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }


    public function getCoefficient()
    {
        return $this->coefficient;
    }


    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
    }

}
