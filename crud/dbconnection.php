<?php
//MySQL Server Variables
$server="localhost";
$username="root";
$password="";
$dbname="php-docs";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("Unable to Establish Connection with MySQL".mysqli_connect_error());
}
?>