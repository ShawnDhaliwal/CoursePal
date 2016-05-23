<?php
    session_start();
?>

<html>

    <head>  
        <title> Course Pal </title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    
    <body>
        <!-- Navigation bar is an unordered list -->
        <ul class = "menu1">             
            <li><a class ="activeHome" href ="index.php">Home</a></li>
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
            
            <li><a href ="help.php">Help</a></li>
        </ul>
        
        <!-- Custom style of Course Pal on home page -->
        <div class = "title">
            <span style="color: #3b5998">C</span>ourse <span style="color: #3b5998">P</span>al
        </div>
        
        <p class = "motto">
            Never Regret Taking A Course Again.    
        </p>
        
        <!--The search bar -->
        <div class = "searchBar">
            <input type="text" id="s" placeholder="Search for Course..." required>
            <input type="image" src=Minimal-Magnifying-Glass.png height="11px">
        </div>
        
    </body>

</html>
