<html>
    <head>
        //Redirect
        Registration Successful...
        <meta http-equiv="refresh" content="2;url=index.html">

    </head>
    
    <body>
    <?php
        //Connecting to database, can be replaced by config.php
        $user = 'root';
        $password = 'root';
        $db = 'CoursePal_Users';
        $host = 'localhost';
        $port = 8889;


        $conn = new mysqli("$host:$port", $user, $password,$db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //Get the username, password, and email the user entered in the form
        $usernameValue = $_POST['Username'];
        $userpasswordValue = $_POST['Password'];
        $useremailValue = $_POST['Email'];

        $sql = "INSERT INTO Register (Username, Password, Email)
        VALUES ('$usernameValue','$userpasswordValue','$useremailValue')";
        //If registration successful, user information will be inserted into database.
        if ($conn->query($sql) === TRUE) {
            echo "Redirecting...";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        header('Location: index.html');


    ?>
    </body>
</html>

