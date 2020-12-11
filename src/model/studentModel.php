<?php

namespace App\model;

class studentModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();

        $this->database = $db->connect();

    }

    public function getAll()
    {
        $sql = 'SELECT Student.id,Student.name,Student.birthday,Class.name AS class,Student.gender,Student.email,Student.address,Student.image 
                FROM Student
                JOIN Class 
                ON Student.class=Class.id';
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $array = [];
        foreach ($data as $key => $item) {
            $student = new student($item['name'], $item['birthday'], $item['class'], $item['gender'], $item['email'], $item['address'], $item['image']);
            $student->setId($item['id']);
            array_push($array, $student);
        }
        return $array;

    }

    public function addStudent($student)
    {
        $sql = "INSERT INTO Student(name, birthday, class, gender, email, address, image) 
                           VALUES (:name,:birthday,:class,:gender,:email,:address,:image)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $student->getName());
        $stmt->bindParam(':birthday', $student->getBirthday());
        $stmt->bindParam(':class', $student->getClass());
        $stmt->bindParam(':gender', $student->getGender());
        $stmt->bindParam(':email', $student->getEmail());
        $stmt->bindParam(':address', $student->getAddress());
        $stmt->bindParam(':image', $student->getImage());
        $stmt->execute();
    }

    public function getStudentById($id)
    {
        $sql = 'SELECT * FROM Student WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function editStudent($newStudent)
    {
        $sql = 'UPDATE Student SET name=:name, birthday=:birthday, class=:class, gender=:gender, email=:email, address=:address, image=:image WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $newStudent->getName());
        $stmt->bindParam(':birthday', $newStudent->getBirthday());
        $stmt->bindParam(':class', $newStudent->getClass());
        $stmt->bindParam(':gender', $newStudent->getGender());
        $stmt->bindParam(':email', $newStudent->getEmail());
        $stmt->bindParam(':address', $newStudent->getAddress());
        $stmt->bindParam(':image', $newStudent->getImage());
        $stmt->bindParam(':id', $newStudent->getId());
        $stmt->execute();


    }

    public function deleteStudent($id)
    {
        $sql = 'DELETE FROM Student WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function find($search)
    {
        $sql = "SELECT * FROM Student WHERE name LIKE '$search'";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
