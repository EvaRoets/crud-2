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
<!-- display existing records-->
<?php
    $mysqli = new mysqli('localhost', 'root', '', 'crud-2') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die(mysqli_error($mysqli));

//    var_dump("<pre>");
//    var_dump($result->fetch_assoc());
//    var_dump($result->fetch_assoc());
//    var_dump($result->fetch_assoc());
//    var_dump("</pre>");
?>
<!-- add table -->
    <div class="= "row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>

        <?php
            while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['title'] ?></td>
                <td><?= $row['author'] ?></td>
                <td></td>
            </tr>
        <?php endwhile; ?>
        </table>
    </div>

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
