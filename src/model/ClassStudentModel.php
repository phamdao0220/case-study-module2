<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-09
 * Time: 14:26
 */

namespace App\model;


class ClassStudentModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getClassStudent()
    {
        $sql='SELECT * FROM Class';
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $array=[];
        foreach ($data as $item){
            $class= new ClassStudent($item['name']);
            $class->setId($item['id']);
            array_push($array,$class);
        }
        return $array;
    }
}
