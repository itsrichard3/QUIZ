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
    <header class="bg-[url('../views/layout/img/old.jpg')] bg-cover h-screen flex">

        <img src="../views/layout/img/aws-removebg-preview.png" class="w-64 h-60 ">
        <div class="absolute text-white flex  flex-col  top-[50%] left-2/4   gap-8">

            <h1>welcome to AWS quiz</h1>
            <h2>please entre your pseudo</h2>
            <form method="post" action="">
                <input type="text" name="pseudo" placeholder="pseudo"></input>
                <button type="submit">start</button>
            </form>

        </div>
    </header>

</body>

</html>