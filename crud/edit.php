<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update User</title>
</head>
<body>
    <center>
        <?php require_once("header.php"); ?>
        <h1>User Update Form</h1>
        <?php 
            if(isset($_POST['btnSubmit'])){
                require_once("edit_record_update.php");
            }
            if(isset($_GET['user_id'])){
                require_once("edit_record_fetch.php");
        ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <input type="hidden" name="txtUserID" value="<?php echo $_GET['user_id']; ?>" />
                <table>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" value="<?php echo $row['user_first_name']; ?>" name="txtFirstName" placeholder="First Name" required /></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" value="<?php echo $row['user_last_name']; ?>" name="txtLastName" placeholder="Last Name" required /></td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td><input type="email" value="<?php echo $row['user_email']; ?>" name="txtEmailAddress" placeholder="Email" required /></td>
                    </tr>
                    <tr>
                        <td>UserName</td>
                        <td><input type="text" value="<?php echo $row['user_username']; ?>" name="txtUserName" placeholder="User Name" required /></td>
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
                <?php
            }
                ?>
        
    </center>
</body>
</html>