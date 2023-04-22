<?php
    require('connection.php');
    include('authorised.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="submittingpost.js"></script>
</head>
<body>
<?php include('header.php'); ?>
    <div id="maincontainer">
        <article id="main">
            <form id="addblog" action="addpostdata.php" method="Post" >
                <fieldset class="inputblog">
                    <h3>Add Blog Post</h3>
                    <p>
                        <input id="title" type="text" placeholder="Title" name="title">
                    </p>
                     <p>
                        <textarea id="post" name="post" placeholder="Enter your text here" rows="10" cols="70"></textarea>
                    </p>
                    <p class="buttons">
                        <input type="submit" id="button1" value="Add Post" onclick="load()">
                        <input type="button" id="button2" value="Clear" name="clear" onclick="clearBlog()">
                    </p>
                </fieldset>
            </form>
        </article>
        <?php include('footer.php'); ?>
    </div>
</body> 
</html>