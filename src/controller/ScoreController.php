<?php

namespace App\controller;

use App\model\Score;
use App\model\ScoreModel;


class ScoreController
{
    protected $scoreModel;

    public function __construct()
    {
        $this->scoreModel = new ScoreModel();
    }

    function showScore()
    {
        $id = $_REQUEST['id'];

        $scores = $this->scoreModel->getAll($id);
        include_once "src/view/list_score.php";
    }

    function addScore()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST['id'];
            $subjects = $this->scoreModel->getAllSubject($id);

            include_once "src/view/add_score.php";
        } else {

            $subject = $_REQUEST['subject_id'];
            $student = $_REQUEST["student_id"];
            $score = $_REQUEST["score"];
            $coefficient = $_REQUEST['coefficient'];
            $score = new Score($subject, $student, $score, $coefficient);
            $this->scoreModel->addScore($score);
            $id = $_REQUEST['student_id'];
            header("location:index.php?page=list_score&id=");
        }
    }

}
