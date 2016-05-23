<html>
    <head>
        
        <meta http-equiv="refresh" content="3;url=index.php">
  
    </head>
</html>

<?php
    //Kill Session, logs user out
    session_start();
    $_SESSION['loggedin'] = false;
    unset($_SESSION["username_in"]); 
    echo "Logging out.."

?>
