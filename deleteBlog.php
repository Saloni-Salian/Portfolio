<?php
    require('connection.php');
    include('authorised.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $title = $_POST['title'];
        $sql = "DELETE FROM `POSTS` WHERE `Title`= '$title'";
        if ($conn->query($sql) === TRUE) 
        {
            header("Location: adminViewBlog.php");
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>