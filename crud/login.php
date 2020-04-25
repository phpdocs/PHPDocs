<?php require_once("login_helper.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD Login</title>
</head>
<body>
    <center>
        <h1>Login</h1>
        <p><?php echo $message; ?></p>
        <form action="" method="post">
            <table>
                <tr>
                    <td>UserName</td>
                    <td><input type="text" name="txtUserName" required /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="txtPassword" required /></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><input type="submit" value="Login" name="btnSubmit" /></td>
                </tr>

            </table>
        </form>
    </center>
</body>
</html>