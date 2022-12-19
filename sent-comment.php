<?php

$word = $_POST["userWord"];
$text =  $_POST["userText"];





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/218/218466.png">
    <title>Results</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body class="result-bg">
    <main class="container ">
        <div class="row p-4 d-flex justify-content-center text-center ">
            <div class="col">
            <h2>This is your original paragraph: </h2>  
                <div>
                    <h4><?php echo $text ?></h4>
                </div>
        

            </div>
            <div class="col">
                <h2> This is the censored version: </h2>
                    <div >
                        <h4><?php echo str_replace($word, "***", $text) ?></h4>
                    </div>    
            </div>
        </div>
    </main>
    
</body>
</html>