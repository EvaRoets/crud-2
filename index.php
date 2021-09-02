<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Your list of books</title>
</head>
<body>
<header>
    <!-- Background image -->
    <div class="p-5 text-center bg-image sticky-top"
         style="
      background-image: url('./images/books.jpg');
      height: 200px;
      margin-bottom: 50px;
    ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Your list of books</h1>
                    <h4 class="mb-3">Keep track of all the books you want to read </h4>
                </div>
            </div>
        </div>
    </div>
</header>

<?php require_once "process.php"; ?>

<!--add action message-->
<?php
if (isset($_SESSION["message"])): ?>
    <div class="alert alert-<?= $_SESSION["msg_type"] ?> ">
        <?php
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
        ?>
    </div>
<?php endif; ?>

<!-- display existing records-->
<div class="container">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'crud-2') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    ?>

    <!-- add form-->
    <div class="col-lg-7 col-md-7 col-sm-7 container justify-content-center">
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="form-group" style="margin:15px;">
                <label for="title">Book Title</label>
                <input type="text" name="title" class="form-control"
                       value="<?= $title; ?>"
                       placeholder="Enter the book title">
            </div>

            <div class="form-group" style="margin:15px;">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control"
                       value="<?= $author; ?>"
                       placeholder="Enter the author">
            </div>

            <div class="form-group text-center" style="margin:15px;">
                <?php if ($update == true): ?>
                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                <?php else: ?>
                    <button type="submit" name="addBook" class="btn btn-success">Add book</button>
                <?php endif; ?>
            </div>
        </form>
    </div>

    <!-- add table -->
    <div class="row justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>

            <?php
            // loop through the database and store in a row
            while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['author']; ?></td>
                    <td>
                        <a href="index.php?edit=<?= $row['id']; ?>"
                           class="btn btn-info"
                           style="margin:10px;">Edit</a>
                        <a href="process.php?delete=<?= $row['id']; ?>"
                           class="btn btn-danger"
                           style="margin:10px;">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>

        </table>
    </div>
</div>
<footer>
    <div class="p-4 text-center bg-image sticky-bottom"
         style="
      background-image: url('./images/books.jpg');
      height: 40px;
      margin-top: 80px;
    ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);
            <div class=" d-flex justify-content-center align-items-center h-100
        ">
        <div class="text-white">
            Copyright &copy;
            <script>document.write(new Date().getFullYear())</script>
            Eva Roets
        </div>
    </div>
    </div>
    </div>

</footer>
</body>
</html>