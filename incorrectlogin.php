<?php
    require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incorrect Details</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include('header.php'); ?>
    <div id="mainlogin">
        <h3>Incorrect Username/Password.</h3><br/>
        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>