<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Validation</title>
</head>
<body>
    <?php
        require_once("insert.php");
    ?>
    <center>
        <?php require_once("header.php"); ?>
        <h1>Insert User Form</h1>
        
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