<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <form action="sent-comment.php" method="POST" class="p-4">
            <div class="form-group mb-2">
                <label for="">Name</label>
                <input type="text" class="form-control"  placeholder="Name" name="userName">
            </div>
            <div class="form-group mb-2">
              <label for="">Surname</label>
              <input type="text" class="form-control" placeholder="Surname" name="userSurname">
            </div>
            <div class="form-group mb-2">
                <label for="">Comment</label>
                <textarea class="form-control" name="userComment"></textarea>
            </div>
            <button class="btn btn-dark">Submit</button>
        </form>

    </main>
    
</body>
</html>