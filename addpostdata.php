<?php
require('connection.php');
include('authorised.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $title = $_POST['title'];
    $body = $_POST['post'];

    $sql = "INSERT INTO POSTS (Title, Body) VALUES ('$title', '$body')";
    if ($conn->query($sql) === TRUE) 
    {
        header("Location: viewBlog.php");
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>