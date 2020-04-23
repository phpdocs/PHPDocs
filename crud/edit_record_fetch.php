<?php
    require_once("dbconnection.php");
    require_once("functions.php");

    //Grab the UserID
    $user_id=check_input($_GET['user_id']);

    //Query to fetch User Data Against UserID
    $SelectQuery="SELECT user_first_name,user_last_name,user_email,user_username ";
    $SelectQuery.="FROM users WHERE user_id=".$user_id;
    $result=mysqli_query($conn,$SelectQuery);
    
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
    }else{
        die("Record Not Found.");
    }

?>