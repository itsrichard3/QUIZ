<?php

require("../models/dao/QuestionDao.php");
require("../models/dao/ReponseDao.php");
session_start();
$questionModel = new QuestionDao();
$reponseModel = new ReponseDao();
if (!empty($_SESSION['pseudo'])) {
     $questions = $questionModel->getAllQuestion();
    

    $responsesQuestions = [];
    foreach ($questions as $question) {
         $reponseByQestionId = $reponseModel->getReponse($question->idQ);

        $responseQuestion = array(
            "q" => $question,
            "r" => $reponseByQestionId
        );
        array_push($responsesQuestions, $responseQuestion);
    
        shuffle($responsesQuestions);
     var_dump($responsesQuestions);
    }
    // include_once('../views/quiz.php');
} else {
    header('Location:./lobby.php');
}
