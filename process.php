<?php
//establish connection
$mysql = new mysql('localhost', 'root', 'root', 'crud-2') or die(mysqli_error($mysql));

//check if addBook button is clicked
if (isset($_POST['addBook'])){
   //save entries in variables
    $bookTitle = $_POST['bookTitle'];
    $author = $_POST['author'];

    //insert entries in database or display syntax error
    $insert = "INSERT INTO data (book title, author) VALUES ('$bookTitle', '$author')";
    $mysql->query($insert) or die($mysql-error);
}