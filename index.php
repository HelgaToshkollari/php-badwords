<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/218/218466.png">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="my-bg">
    <main class="container">
        <div class="row justify-content-center"> 
            <div class="col-sm-6">
                <h1 class="text-center py-3">Censor words in your paragraph!</h1>
                <form action="sent-comment.php" method="POST" class="p-4">
                    <div class="form-group mb-2">
                        <label for="">Word to censor</label>
                        <input type="text" class="form-control"  placeholder="..." name="userWord">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Paragraph</label>
                        <textarea class="form-control" placeholder="..." name="userText"></textarea>
                    </div>
                    <button class="btn btn-dark">Submit</button>
                </form>

            </div>
        </div>

        

    </main>
    
</body>
</html>