<?php
require('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['password'];

    $sql = "INSERT INTO MINIPROJECTUSERS (name, email, password) VALUES ('$name', '$email', '$pass1')";
    if ($conn->query($sql) === TRUE) 
    {
        header("Location: addpost.php");
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['Admin_Status'] = 0;
        header("Location: addpost.php");
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>