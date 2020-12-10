<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-09
 * Time: 16:17
 */

namespace App\model;


class Score
{
    public $id;
public $subject_id;
public $student_id;
public $score;
public $coefficient;

    /**
     * Score constructor.
     * @param $subject
     * @param $student
     * @param $score
     * @param $coefficient
     */
    public function __construct($subject_id, $student_id, $score, $coefficient)
    {
        $this->subject_id = $subject_id;
        $this->student_id = $student_id;
        $this->score = $score;
        $this->coefficient = $coefficient;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSubjectId()
    {
        return $this->subject_id;
    }
//a nghe e ngu a
// the e ngu di nhe de may day a code cho not
    /**
     * @param mixed $subject
     */
    public function setSubjectId($subject)
    {
        $this->subject_id = $subject;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student
     */
    public function setStudentId($student)
    {
        $this->student_id = $student;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * @param mixed $coefficient
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
    }

}
