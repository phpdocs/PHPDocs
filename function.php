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
    $UserCount=0;
    ByRef($UserCount);
    ByRef($UserCount);
    ByRef($UserCount);
    ByRef($UserCount);
    ByRef($UserCount);
    ByRef($UserCount);
    echo $UserCount.BR;



    WelcomeToUser("Muhammad Afzal");
    
    echo Percentage(50,75).BR;
    echo Percentage(75,100).BR;


    //Table NUmber
    //Start Range
    //End Range

    //Print the Even or Odd Number From and to specific Range
    //1st=Even/Odd 2nd=From 3rd=to
    
?>