<?php include_once('../Config/config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= APP_NAME ?></title>

</head>

<body>
<button  class="absolute  top-1/4 buttona text-white m-11 bg-black">NEXT</button>
<button  class="absolute  top-1/4  text-white m-11 bg-black">valide</button>
    <header class="bg-[url('./layout/img/ol.jpg')] bg-cover h-screen flex">
    <?= $_SESSION['pseudo'] ?>

        <span  class="text-white flex justify-end">player : </span>
   

        
        
    <?php
   
    
    foreach ($responsesQuestions as $responseQuestion) { echo "hi";?>
    
        <div id="q<?=$responseQuestion["q"]->idQ?>" class="questions bg-yellow-200 rounded-md text-black w-4/5 flex  flex-col gap-9 items-center absolute justify-center top-1/3 left-32">
            <span class="w-7/12" >Question:     </span>
            
            <h2>  <?= $responseQuestion["q"]->question ?> </h2>
            
         <?php foreach ($responseQuestion["r"] as $rq) 
            
            { 
                ?> 
                <div class="flex flex-col gap-7 w-9/12">
                <label for="a" class="block mt-4 border bg-orange-500 border-gray-300 rounded-lg py-2 px-6 text-lg"><input id="a" type="radio" class="" name="response <?= $rq->idR ?>','<?=$responseQuestion["q"]->idQ?>" value="" >    <?= $rq->reponse ?> </label>
                 </div>
            <?php 
        } 
        ?>
            
        </div>
     <?php
     } 
    ?> 
    

    </header>
</body>
<script>
    var x = 0;
    hideallbut(0);

var buttona = document.querySelector(".buttona");

buttona.addEventListener("click", () => {
    x= x+1;
    hideallbut(x);
});

function hideallbut(id) {
    console.log(id)
    var questions = document.querySelectorAll(".questions");
    console.log(questions.length);
    questions.forEach((element, index) => {
        
        if (index !== id) {
            
            element.style.display = "none";
            
        } else {
            element.style.display = "block"; 
        }
    });
}

</script>
</html>
