<?php
session_start();
?>
<header>
        <hgroup>
          <h1>My Portfolio</h1>
          <h2>Saloni S Salian</h2>
          <?php
            if(!isset($_SESSION["name"])) {
              echo "";
            } else {
              echo "<h2>Welcome " . $_SESSION["name"] . "</h2>";
            }
            ?>
        </hgroup>
        <nav class="hnavigation">
            <ul>
              <li><a href="index.php">Home</a></li>
                <li><a href="experience.php">Experience</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <?php
    
    if(!isset($_SESSION["name"])) {
        echo "";
    } else {
        echo "<li><a href='addpost.php'>Add Post</a></li>";
    }
?>
                <?php
    
    if(!isset($_SESSION["name"])) {
        echo "<li id='login'><a href='login.php'>Login</a></li>";
    } else {
        echo "<li id='logout'><a href='logout.php'>Logout</a></li>";
    }
?>              
            </ul>
        </nav>
</header>