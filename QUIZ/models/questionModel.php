<?php
    include_once("../Config/database.php");
    class questionModel 
    {
        function getAllQuestion() {
            $db = new database();
            $db->query("SELECT * FROM question");
            $question = $db->fetchAll();
            return $question;
        }
    }
    
?>