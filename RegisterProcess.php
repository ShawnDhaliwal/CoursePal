<html>
    <head>
        
        Registration Successful...
        <meta http-equiv="refresh" content="2;url=index.html">

    </head>
    
    <body>
    <?php

        $user = 'root';
        $password = 'root';
        $db = 'CoursePal_Users';
        $host = 'localhost';
        $port = 8889;


        $conn = new mysqli("$host:$port", $user, $password,$db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $usernameValue = $_POST['Username'];
        $userpasswordValue = $_POST['Password'];
        $useremailValue = $_POST['Email'];

        $sql = "INSERT INTO Register (Username, Password, Email)
        VALUES ('$usernameValue','$userpasswordValue','$useremailValue')";

        if ($conn->query($sql) === TRUE) {
            echo "Redirecting...";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        //Done

        $conn->close();

        header('Location: index.html');


    ?>
    </body>
</html>

