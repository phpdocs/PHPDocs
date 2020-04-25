<?php require_once("session_verify.php"); ?>
<center>
<?php 
    if(isset($_GET['user_id'])){
        require_once("functions.php");
        require_once("dbconnection.php");
        $UserID=check_input($_GET['user_id']);

        $DeleteQuery="DELETE FROM users WHERE user_id=".$UserID;

        $Result=mysqli_query($conn,$DeleteQuery);
        if($Result===true){
            echo "Your Recrod has been Deleted Sucessfully.";
        }else{
            echo "Err=".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
<a href="select.php">Go Back To all Users</a>
</center>