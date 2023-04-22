<?php
require('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Check user is exist in the database
    $query = "SELECT * FROM MINIPROJECTUSERS WHERE email='$email' AND password= '$password'";
    $result = mysqli_query($conn, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) 
    {
        $row  = mysqli_fetch_array($result);
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['Admin_Status'] = $row['admin'];
        header("Location: addpost.php");
    } 
    else {
        header("Location: incorrectlogin.php");
    }
}

?>