<?php
    session_start();
    if(!isset($_SESSION['Auth']) OR !isset($_COOKIE['Auth'])){
        header("Location: login.php");
    }
?>