<?php
session_start();
?>
<html>

    <head>
        
        <title> Course Pal Help </title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    
    <body>
        
         <ul class = "menu1">
                
            <li><a href ="index.php">Home</a></li>
            <li><a href ="about.php">About</a></li>
            <li><a href ="contact.php">Contact</a></li>
             
            <!--    If user is logged in, show tabs Profile and Log out
                    Else show tabs Register and Log in -->
            <?php 
            
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                    <li><a href ="profile.php">Profile</a></li>
                    <li><a href ="logout.php">Log Out</a></li>

            <?php } else { ?>
                <li><a href ="register.php">Register</a></li>
                <li><a href ="login.php">Log in</a></li>
            <?php } ?>

            <li><a class = "activeHelp" href ="help.php">Help</a></li>
            
            
        </ul>
        <p>
        Under Construction..
        </p>
    </body>

</html>