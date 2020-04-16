<?php
    //Introduction to Variables & Constants

    //Introduction to Constants
    define("BR","<br />");
    define("H1O","<h1>");
    define("H1C","</h1>");

    echo H1O."Introduction to Variables & Constants".H1C;
    //String Variable
    $name="Muhammad Afzal";
    
    //Numeric
    $age=21;

    //Eye Side
    $eyeSide=0.75;


    echo "Name=".$name.BR;
    echo "Age=".$age.BR;
    echo "Eye Side=".$eyeSide.BR;

    $eyeSide=1.5;

    echo "My Old Eye Side Was=".$eyeSide.BR;

?>