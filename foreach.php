<?php
    //For Each Loop
    define("BR","<br />");
    $color=array("Black","Green","White","Orange","Yellow");
    $a=1;
    echo "<ul>";
    foreach($color as $value){
        echo "<li>".$a."-".$value."</li>";
        $a++;
    }
    echo "</ul>";
?>