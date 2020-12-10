<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-10
 * Time: 00:19
 */

namespace App\model;


class Subject
{
    protected $id;
    protected $subject_name;

    /**
     * ClassStudent constructor.
     * @param $className
     */
    public function __construct($subject_name)
    {
        $this->subject_name = $subject_name;
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
    public function getSubjectName()
    {
        return $this->subject_name;
    }

    /**
     * @param mixed $className
     */
    public function setSubjectName($subject_name)
    {
        $this->subject_name = $subject_name;
    }
}
