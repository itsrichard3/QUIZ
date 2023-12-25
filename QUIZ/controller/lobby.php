<?php
    session_start();
    if (!empty($_POST["pseudo"])) {
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header('Location: ./quiz.php');
    } else {
        include_once("../views/index.php");
    }
?>