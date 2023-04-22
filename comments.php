<?php
    require('connection.php');
    include('authorised.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $title = $_POST['title'];
        $body = $_POST['post'];
        //$name = "' . $_SESSION['name'] . '";
        $sql = "INSERT INTO COMMENTS (Title, Body, Name) VALUES ('$title', '$body', '" . $_SESSION['name'] . "')";
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