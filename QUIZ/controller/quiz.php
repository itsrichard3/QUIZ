<?php
    include_once("../models/questionModel.php");
    include_once("../models/reponseModel.php");
    session_start();
    $questionModel = new questionModel();
    $reponseModel = new reponseModel();
    if (!empty($_SESSION['pseudo'])) {
        $questions = $questionModel->getAllQuestion();
        $responsesQuestions = [];
        foreach ($questions as $question) {
            $reponseByQestionId = $reponseModel->getAllReponseByIdQuestion($question->idQ);
            $responseQuestion = array(
                "question" => $question,
                "responses" => $reponseByQestionId
            );
            array_push($responsesQuestions, $responseQuestion);
        }
        include_once('../views/quiz.php');
    } else {
        header('Location:./lobby.php');
    }
?>