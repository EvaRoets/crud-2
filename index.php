<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php require "process.php"; ?>
    <div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center">
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="title">Book Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter the book title">
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" placeholder="Enter the author">
            </div>

            <div class="form-group text-center">
                <button type="submit" name="addBook" class="btn btn-primary">Add book</button>
            </div>
        </form>
    </div>
</body>
</html>
