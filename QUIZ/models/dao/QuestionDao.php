<?php
// require_once "./Config/database.php";
require "../models/questionModel.php";
class QuestionDao
{
    private $db;
    private  questionModel  $questions;
    public function __construct()
    {
        $this->db = new database();
        $this->questions = new questionModel();
    }



    function getAllQuestion()
    {
        //    $db = new database();
        $this->db->query("SELECT * FROM question,theme where question.idTh=theme.idTh ");
        $question = $this->db->fetchAll();
        $Qu = array();
        foreach ($question as $row) {
            $q = new QuestionModel();
            $q->setIdQ($row->idQ);
            $q->setQuestion($row->question);
            $q->getIdTh()->setTheme($row->theme);
            $theme = $q->getIdTh()->getTheme();
            $idquestion = $q->getIdQ();
            $nomquestion = $q->getQuestion();

            $arrQuestion = [
                "idq" => $idquestion,
                "ques" => $nomquestion,
                "theme" => $theme
            ];
            array_push($Qu, $arrQuestion);
        }

        return $question;

        // $question = array () ;
        //     foreach ($question as $row) {

        //  }
    }
}


// $v = new QuestionDao();
// $r = $v->getAllQuestion();
// var_dump($r);
