

<html>

    <head>
        
        <title> Course Pal Register </title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    
    </head>
    
    <body>
        
        <form action = "RegisterProcess.php" method = "post"></form>

        <div class = "nav">
            <ul class = "menu1">
                <li><a href ="index.html">Home</a></li>
                <li><a href ="about.html">About</a></li>
                <li><a href ="contact.html">Contact</a></li>        
                <li><a class ="activeRegister" href ="register.php">Register</a></li>
                <li><a href ="login.php">Log in</a></li>
                <li><a href ="help.html">Help</a></li>
                
            </ul>
        </div>
        
        <div class = "register">
        
            Register
            
        </div>
        <div class = "registerform">

            <table class = "registertable">
                <form action="RegisterProcess.php" method="post">
                <tr> 
                    <td>Username:</td>
                    <td><input type="text" name = "Username" id="userform"required></td>
                </tr>
                <tr> 
                    <td>Password: </td>
                    <td><input type="password" name = "Password" id="userform"required></td>
                </tr>
                <tr> 
                    <td>Confirm Password: </td>
                    <td><input type="password" name = "ConfirmPassword" id="userform"required></td>
                </tr>
                <tr> 
                    <td>Email: </td>
                    <td><input type="text" name = "Email" id="userform"required></td>
                </tr>
                <td colspan = "2" ><input type = "submit" id = "RegisterButton" value = "Register"/></td>
                </form>
            </table>
            
        </div>

        
    </body>
    
</html>
