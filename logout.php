<?php
require('connection.php');
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['Admin_Status']);
    if(session_destroy()) {
        // Redirecting To Home Page
       //header("Location: " .$_SERVER['REFERER']);
       header("Location: index.php");
    }
?>