<?php 
    define("BR","<br />");
    function WelcomeMessage(){
        echo "<h1>Welcome to PHPDocs and Learn New Skills.</h1>";
    }

    function WelcomeToUser($name){
        echo "<h1>Welcome Mr. ".$name." to PHPDocs</h1>";
    }

    function Add($a,$b){
        return $a+$b;
    }

    function Percentage($number,$total){
        $per=($number/$total)*100;
        return $per;
    }

    function ByRef(&$Counter){
        $Counter++;
    }
?>