<?php

namespace App\model;

class student
{
    public $id;
    public $name;
    public $birthday;
    public $class;
    public $gender;
    public $email;
    public $address;
    public $image;

    public function __construct($name, $birthday, $class, $gender, $email, $address, $image)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->class = $class;
        $this->gender = $gender;
        $this->email = $email;
        $this->address = $address;
        $this->image = $image;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }


    public function getClass()
    {
        return $this->class;
    }


    public function setClass($class)
    {
        $this->class = $class;
    }


    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }

}
