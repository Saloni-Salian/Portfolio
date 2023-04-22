<?php
    require('connection.php');
    include('authorised.php');
    if($_SESSION['Admin_Status'] == 1)
    {
        header("Location: adminViewBlog.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Blog Posts</title>
</head>
<body>
<?php include('header.php'); ?>
    <form id="monthform" action="viewBlog.php" method="POST">
        <label>Please choose a month:</label>
        <select name="months">
            <option value=01>January</option>
            <option value=02>February</option>
            <option value=03>March</option>
            <option value=04>April</option>
            <option value=05>May</option>
            <option value=06>June</option>
            <option value=07>July</option>
            <option value=08>August</option>
            <option value=09>September</option>
            <option value=10>October</option>
            <option value=11>November</option>
            <option value=12>December</option>
        </select>
        <input type="Submit" id="button1" value="Submit">
    </form>
    <section id="posts">
        <?php 
            $query = "SELECT * FROM POSTS";
            $result = mysqli_query($conn, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);

            $posts = array();
            if($rows>0){
                while($insert = mysqli_fetch_assoc($result)){
                    $posts[]=$insert;
                }
            }

            function compare($element1, $element2) {
                $datetime1 = strtotime($element1['DateTime']);
                $datetime2 = strtotime($element2['DateTime']);
                return $datetime2 - $datetime1;
            }   
            // Sort the array 
            usort($posts, 'compare');

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $month = $_POST['months'];
                foreach($posts as $key){
                    $datetime = strtotime($key['DateTime']);
                    if(date("m", $datetime)==$month){
                    echo "<p class='Date'>" . $key['DateTime'] . "</p>
                        <p><b>" . $key['Title'] . " </b></p>
                        <p> " . $key['Body'] . " </p>" . "<hr>" . "<br>";
                    }
                }
            }
            else{
            foreach($posts as $key){
                echo "<p class='Date'>" . $key['DateTime'] . "</p>
                    <p><b>" . $key['Title'] . " </b></p>
                    <p> " . $key['Body'] . " </p>" . "<hr>" . "<br>";
            }
        }

        ?>
    </section>
    <section id ="comments">
        <form id="commentform" action="comments.php" method="POST">
            <fieldset class="main">
                <h3>Comment</h3>
                <p>Please enter the blog title and your comment</p>
                <p> 
                    <input class="commenttitle" type="text" placeholder="Title" name="title" required>
                </p>
                <p>
                    <textarea id="post" name="post" placeholder="Enter your text here" rows="5" cols="26"></textarea>
                </p>
                <p class="buttons">
                    <input type="Submit" id="button1" value="Submit">
                    <input type="reset" id="button2" value="Clear" name="clear">
                </p>
            </fieldset>
        </form>
    </section>
    <section id="posts">
    <?php
        $query = "SELECT * FROM COMMENTS";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        while($row = mysqli_fetch_assoc($result)) {
            echo "<p>Name: " . $row['Name'] . "</p>
            <p>Title:" . $row['Title']. "</p>
            <p>Body: " . $row['Body'] . " </p>
            <p  class='try'>DateTime: " . $row['Time'] . "</p>" . "<hr>" . "<br>";  
        }
    ?>
    </section>
<?php include('footer.php'); ?>
</body>
</html>