<?php
require_once("dbconnection.php");

$SelectQuery="SELECT user_id,user_first_name,user_last_name,user_email,user_username FROM users";
$result=mysqli_query($conn,$SelectQuery);

?>