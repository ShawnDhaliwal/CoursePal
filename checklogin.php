<html>
    <head>
        
            <meta http-equiv="refresh" content="3;url=index.php">

    </head>
    
    <body>
    
    </body>
    
</html>
    <?php

    session_start();
    include("config.php");
 
    // username and password sent from form 
    $myusername=$_POST['LogInUsername']; 
    $mypassword=$_POST['LogInPassword']; 


    $sql="SELECT * FROM Register WHERE Username='$myusername' AND Password='$mypassword' LIMIT 1";
    $result=mysqli_query($conn, $sql);
    //If queries retreieved from mysql_query is equal to 1
    /* ie, we found an entry in the database that has the username and password entered into Log in form*/
    if(mysqli_num_rows($result) == 1){
                
        $_SESSION['loggedin'] = true;
        $_SESSION['username_in'] = $myusername;
        echo"Welcome ".$_SESSION['username_in']."! Redirecting..";

        
    }else{ ?>
        <script>
        alert('Invalid Username or Password');
        </script>
    <?php
    }
        
    $conn->close();

        
 ?>

