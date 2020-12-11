<?php

namespace App\controller;

use App\model\ClassStudentModel;
use App\model\studentModel;
use App\model\student;

class StudentController
{
    protected $studentModel;
    protected $classStudentModel;

    public function __construct()
    {
        $this->studentModel = new studentModel();
        $this->classStudentModel = new ClassStudentModel();
    }

    public function show()
    {
        $students = $this->studentModel->getAll();
        include_once 'src/view/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $classStudent = $this->classStudentModel->getClassStudent();
            include_once "src/view/add.php";
        } else {
            $name = $_REQUEST['name'];
            $birthday = $_REQUEST['birthday'];
            $class = $_REQUEST['classNumber'];
            $gender = $_REQUEST['gender'];
            $email = $_REQUEST['email'];
            $address = $_REQUEST['address'];
            $file = $_FILES['my-file']['tmp_name'];
            $path = "uploads/" . $_FILES['my-file']['name'];
            move_uploaded_file($file, $path);
            $student = new student($name, $birthday, $class, $gender, $email, $address, $path);
            $this->studentModel->addStudent($student);
            header('location:index.php');

        }

    }


    public function edit()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $classStudent = $this->classStudentModel->getClassStudent();
            $student = $this->studentModel->getStudentById($id);
            include_once "src/view/edit.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $birthday = $_REQUEST['birthday'];
            $class = $_REQUEST['class'];
            $gender = $_REQUEST['gender'];
            $email = $_REQUEST['email'];
            $address = $_REQUEST['address'];
            $file = $_FILES['my-file']['tmp_name'];
            $path = "uploads/" . $_FILES['my-file']['name'];
            if (move_uploaded_file($file, $path)) {
                echo "Tải tập tin thành công";
            } else {
                echo "Tải tập tin thất bại";
            }
            $newStudent = new student($name, $birthday, $class, $gender, $email, $address, $path);
            $newStudent->setId($id);
            $this->studentModel->editStudent($newStudent);
            header('location:index.php');

        }

    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->studentModel->deleteStudent($id);
        header('location:index.php');
    }

    public function search()
    {
        $search = '%' . $_REQUEST['search'] . '%';
        $bills = $this->studentModel->find($search);
        include "src/view/search.php";
    }
}
