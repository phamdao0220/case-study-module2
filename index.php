<?php
require_once __DIR__ . "/vendor/autoload.php";
$studentController = new \App\controller\StudentController();
$scoreController=new \App\controller\ScoreController();
$page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case 'add':
        $studentController->add();
        break;
    case'add_score':
        $scoreController->addScore();
        break;
    case'list_score':
        $scoreController->showScore();
        break;
    case'edit':
        $studentController->edit();
        break;
    case "list":
        $student = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
        $studentController->show();
        break;
    case'delete':
        $studentController->delete();
        break;
    default:
        $studentController->show();
}
