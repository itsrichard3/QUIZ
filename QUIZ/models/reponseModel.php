<?php
    include_once("../Config/database.php");
    class reponseModel 
    {
        function getAllReponseByIdQuestion($id_q) {
            $db = new database();
            $db->query("SELECT * FROM `reponse` WHERE `idQ` = :idQ");
            $db->bind(":idQ", $id_q);
            $reponse = $db->fetchAll();
            return $reponse;
        }
    }
?>