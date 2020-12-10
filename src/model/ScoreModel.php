<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-09
 * Time: 16:20
 */

namespace App\model;


//use App\controller\StudentController;

class ScoreModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();

    }

    public function getAll($id)
    {
        $sql = "SELECT Student.*, Subject.subject_name, Score.* FROM Student INNER JOIN Score ON Score.student_id = Student.id INNER JOIN Subject ON Score.subject_id = Subject.id Where Student.id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;

    }

    public function addScore($score)
    {
        $sql = 'INSERT INTO Score VALUES subject_id=:subject_id, student_id=:student_id, score=:score, coefficient=:coefficient';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':subject_id', $score->getSubjectId());
        $stmt->bindParam(':student_id', $score->getStudentId());
        $stmt->bindParam(':score', $score->getScore());
        $stmt->bindParam(':coefficient', $score->getCoefficient());
        $stmt->execute();
    }

    public function getAllSubject()
    {
        $sql = "SELECT * FROM Subject";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $array = [];
        foreach ($data as $key => $item) {
            $subject = new Subject($item['subject_name']);
            $subject->setId($item['id']);
            array_push($array, $subject);
        }
        return $array;
    }
}
