<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include('header.php'); ?>
    <div id="maincontainer">
        <article id="main">
            <form class="login" action="logindata.php" method="POST">
                <fieldset class="main">
                    <h3>Login</h3>
                    <p>Please enter your email and password</p>
                    <p>
                        <input class="email" type="email" placeholder="Email" name="email" required>
                    </p>
                    <p>
                        <input class="psw" type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
                    </p>
                    <p class="buttons">
                        <input type="Submit" id="button1" value="Login" >
                        <input type="reset" id="button2" value="Clear" name="clear">
                    </p>
                    <p>Don't have an account yet? Register <a href="register.php">here</a></p>
                </fieldset>
            </form>
        </article>
        <?php include('footer.php'); ?>
    </div>
</body>
</html>