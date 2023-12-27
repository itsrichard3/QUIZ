<?php include_once('../Config/config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./layout/css/style.css">
    <title><?= APP_NAME ?></title>

</head>

<body>
    <header class="bg-[url('../views/layout/img/ol.jpg')] bg-cover h-screen flex">


        <div class="  flex  justify-center mx-auto flex-col gap-6">
            <img src="../views/layout/img/aws-removebg-preview.png" class="w-80 h-72 ">
            <div id="bord" class="  space-y-8 bg-yellow-100 h-56 text-center  rounded-md">
                <h1 class="opacity-100 text-black font-bold">welcome to AWS quiz</h1>
                <h2 class="opacity-100 text-black ">please entre your pseudo</h2>
                <form method="post" action="../controller/lobby.php" class="opacity-100 flex flex-col items-center gap-5 ">
                    <input type="text" name="pseudo" class="border-solid border rounded-md w-40 justify-around flex border-black" placeholder="pseudo"></input>
                    <button type="submit" class="text-black w-36 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center w-me-2 mb-2 ">start</button>
                </form>

            </div>
    </header>

</body>

</html>