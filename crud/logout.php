<?php 

    session_start();

    //unset the session
    session_unset();

    //Destroy
    session_destroy();

    //Redirect to Login Page
    header("Location: login.php");

?>