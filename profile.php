
<html>

    <head>
        
        <title> Course Pal Profile </title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    
    <body>
         <div class = "nav">

         <ul class = "menu1">
                
            <li><a href ="index.php">Home</a></li>
            <li><a href ="about.php">About</a></li>
            <li><a href ="contact.php">Contact</a></li>
            <li><a class = "activeProfile" href ="profile.php">Profile</a></li>
            <li><a href ="logout.php">Log Out</a></li>

            <li><a href ="help.php">Help</a></li>
            
            
        </ul>
        
        </div>
        <p>
        <?php
            session_start();
            include("config.php");
            $sql="SELECT * FROM Register WHERE Username='".$_SESSION['username_in']."'";
            $result=mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            printf ("Your Email: %s <br> Your Username: %s", $row["Email"], $row["Username"]);

        ?>
        <br>
        Page Under Construction..
        </p>
        
    </body>

</html>

