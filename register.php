<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include('header.php'); ?>
    <div id="maincontainer">
        <article id="main">
            <form class="register" action="registerdata.php" method="POST">
                <fieldset class="main">
                    <h3>Register</h3>
                    <p>Please enter your name, email and password</p>
                    <p>
                        <input class="name" type="text" placeholder="Name" name="name" required>
                    </p>
                    <p>
                        <input class="email" type="email" placeholder="Email" name="email" required>
                    </p>
                    <p>
                        <input class="psw" type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
                    </p>
                    <p class="restrictions">Your password should be atleast 6 characters long with 1 Uppercase letter, 1 Lowercase letter and 1 number</p>
                    <p class="buttons">
                        <input type="Submit" id="button1" value="Register">
                        <input type="reset" id="button2" value="Clear" name="clear">
                    </p>
                </fieldset>
            </form>
        </article>
        <?php include('footer.php'); ?>
    </div>
</body>
</html>