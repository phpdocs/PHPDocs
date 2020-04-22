<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Validation</title>
</head>
<body>
    <?php
        if(isset($_POST['btnSubmit'])){
            //Validate Here
            $txtFirstName=check_input($_POST['txtFirstName']);
            $txtLastName=check_input($_POST['txtLastName']);
            $txtEmail=check_input($_POST['txtEmailAddress']);
            $txtUserName=check_input($_POST['txtUserName']);
            $txtPassword=check_input($_POST['txtPassword']);
            $txtAgainPassword=check_input($_POST['txtReTypePassword']);
            echo "<p><ul>";
            //First Name
            if(empty($txtFirstName) || !checkOnlyText($txtFirstName)){
                echo "<li>Please Enter First Name</li>";
            } 

            //Last Name
            if(empty($txtLastName) || !checkOnlyText($txtLastName)){
                echo "<li>Please Enter Last Name</li>";
            }

            //Email Validation
            if(empty($txtEmail) || !filter_var($txtEmail, FILTER_VALIDATE_EMAIL)){
                echo "<li>Please Enter Proper Email</li>";
            }

            //Last Name
            if(empty($txtUserName) || !checkOnlyText($txtUserName)){
                echo "<li>Please Enter Proper UserName</li>";
            }

            //Verifiy Password
            if(empty($txtPassword) || empty($txtAgainPassword) || $txtPassword!=$txtAgainPassword ){
                echo "<li>Please Verify your password</li>";
            }

            echo "</ul></p>";

        }

        function check_input($value){
            $value=trim($value); //remove the unwanted spaces
            $value=stripslashes($value); //remove the slashes
            $value=htmlspecialchars($value); //convert tags into special character format like from  < tag to < 
            return $value;
        }

        function checkOnlyText($value){
            return preg_match("/^[a-zA-Z ]*$/",$value);
        }
    ?>
    <center>
        <h1>Form Validation</h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="txtFirstName" placeholder="First Name" required /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="txtLastName" placeholder="Last Name" required /></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td><input type="email" name="txtEmailAddress" placeholder="Email" required /></td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td><input type="text" name="txtUserName" placeholder="User Name" required /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="txtPassword"  required /></td>
                </tr>
                <tr>
                    <td>ReType Password</td>
                    <td><input type="password" name="txtReTypePassword"  required /></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Clear" /></td>
                    <td><input type="submit" value="Save" name="btnSubmit" /></td>
                </tr>
            </table>
        </form>

        
    </center>
</body>
</html>