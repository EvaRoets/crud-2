<?php

session_start();

//establish connection
$mysqli = new mysqli('localhost', 'root', '', 'crud-2') or die(mysqli_error($mysqli));

//check if addBook button is clicked
if (isset($_POST['addBook'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];

    // insert data into database
    $insert = "INSERT INTO data (title , author) VALUES ('$title', '$author')";
    $mysqli->query($insert) or die($mysqli->error);

    $_SESSION['message'] = "Your book has been added to your list";
    $_SESSION['msg_type'] = "success";

    // redirect to index
    header("location: index.php");
}

//check if delete button is clicked with get because an url is passed
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = "DELETE FROM data WHERE id=$id";
    $result = $mysqli->query($delete) or die($mysqli->error);

    $_SESSION['message'] = "Your book has been deleted";
    $_SESSION['msg_type'] = "danger";

    // redirect to index
    header("location: index.php");
}

