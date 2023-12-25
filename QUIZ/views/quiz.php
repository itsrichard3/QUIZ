<?php include_once('../Config/config.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?=APP_NAME?></title>

</head>

<body>
    <span>player : <?=$_SESSION['pseudo']?></span>
    <form action="" method="post">
        <?php foreach($responsesQuestions as $responseQuestion) {?>
        <div>
            <span>Question: <?= $responseQuestion["question"]->question ?></span>
            <input type="radio" value="id_reponse" id="reponse1">
            <label for="reponse1">res1</label>
            
            <input type="radio" value="id_reponse" id="reponse2">
            <label for="reponse2">res2</label>
            
            <input type="radio" value="id_reponse" id="reponse3">
            <label for="reponse3">res3</label>
            
            <input type="radio" value="id_reponse" id="reponse4">
            <label for="reponse4">res4</label>

            <span>next Question</span>
        </div>
        <?php } ?>
        <input type="submit" value="fin">
    </form>
</body>

</html>