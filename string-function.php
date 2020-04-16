<?php
    define("BR","<br />");
    $line="I Love My Country";

    echo strlen($line).BR;

    $revers=strrev($line);
    echo strrev($revers).BR;

    echo strpos($line,"My").BR;

    echo substr($line,strpos($line,"My"),strlen($line)).BR;

    $friend="Hello Friend";
    echo str_replace("Friend","Brother",$friend).BR;

    echo str_repeat("Ha",10).BR;

    echo Upper("Pakistan").BR;

    echo strtolower("PhP").BR;

    function Upper($value){
        return strtoupper($value);
    }

    //String Built-in Functions search and try and put the things in comment that 
    //What you have learned new thing from internet
?>