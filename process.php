<?php
//establish connection
$mysqli = new mysqli('localhost', 'root', '', 'crud-2') or die(mysqli_error($mysql));

//check if addBook button is clicked
if (isset($_POST['addBook'])) {
    //save entries in variables
    $title = $_POST['title'];
    $author = $_POST['author'];

    //insert entries in database or display syntax error
    $insert = "INSERT INTO data (title , author) VALUES ('$title', '$author')";
    $mysqli->query($insert) or die($mysqli->error);
}

//check if delete button is clicked with get because an url is passed
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM data WHERE id=$id";
    $mysqli->query($delete) or die($mysqli->error);

}