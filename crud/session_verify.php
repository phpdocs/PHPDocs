<?php
    session_start();
    if(!isset($_SESSION['Auth'])){
        header("Location: login.php");
    }
?>