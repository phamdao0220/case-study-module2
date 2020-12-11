<?php

namespace App\model;


class Subject
{
    protected $id;
    protected $subject_name;

    public function __construct($subject_name)
    {
        $this->subject_name = $subject_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSubjectName()
    {
        return $this->subject_name;
    }

    public function setSubjectName($subject_name)
    {
        $this->subject_name = $subject_name;
    }
}
