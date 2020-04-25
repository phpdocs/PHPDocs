<?php 
    require_once("session_verify.php");
    require_once("select_helper.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP/MySQL Select</title>
</head>
<body>
    <center>
        <?php require_once("header.php"); ?>
        <h1>Users</h1>
        <table border=1 cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                ?>
                        <tr>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['user_first_name'].' '.$row['user_last_name']; ?></td>
                            <td><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['user_username'] ?></td>
                            <td><a href="edit.php?user_id=<?php echo $row['user_id']; ?>">Edit</a></td>
                            <td><a href="delete.php?user_id=<?php echo $row['user_id']; ?>">Delete</a></td>
                        </tr>
                <?php
                            
                        }

                    }else
                        echo "<tr><td colspan='6'>No Record found</td></tr>";
                ?>
            </tbody>
        </table
    </center>
</body>
</html>