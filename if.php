<?php
    define("BR","<br />");
    $day=strtoupper(date("D"));
    if($day=="FRI")
        echo "Happy Weekend".BR;
    else
        echo "Stay Happy with your Work.".BR;

    $TotalMarks=100;
    $ComputerMarks=81;

    if($ComputerMarks>=90)
        echo "You Secured A+ in Computer Science.".BR;
    else if($ComputerMarks>=80 AND $ComputerMarks<90)
        echo "You Secured A In Computer Science.".BR;
    else if($ComputerMarks>=70 AND $ComputerMarks<80)
        echo "You Secured B+ In Computer Science.".BR;
    else if($ComputerMarks>=60 AND $ComputerMarks<70)
        echo "You Secured B In Computer Science.".BR;
    else if($ComputerMarks>=50 AND $ComputerMarks<60)
        echo "You Secured C in Computer Science.".BR;
    else if($ComputerMarks>=40 AND $ComputerMarks<50)
        echo "You Secured D in Computer Science.".BR;
    else if($ComputerMarks>=33 AND $ComputerMarks<40)
        echo "You Secured E in Computer Science.".BR;
    else
        echo "You are Fail.".BR;

    $English=32;
    $Urdu=70;
    $PakStudies=70;
    $IslamicStudies=70;

    if($English>=33 AND $Urdu>=33 AND $PakStudies>=33 AND $IslamicStudies>=33)
        echo "You are Passed".BR;
    else
        echo "You are Fail".BR;

    if($English>=33 OR $Urdu>=33)
        echo "You are Passed".BR;
    else 
        echo "You are Fail".BR;


    //Print only Even Number
    for($a=0;$a<=20;$a++){
        if($a%2!=0){
            echo $a.BR;
        }
    }


?>