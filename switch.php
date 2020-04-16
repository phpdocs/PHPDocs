<?php
    define("BR","<br />");
    
    $day=strtoupper(date("D"));
    $day="ABC";
    switch($day){
        case "MON":
            echo "Today is Monday.".BR;
            break;
        case "TUE":
            echo "Today is Tuesday.".BR;
            break;
        case "WED":
            echo "Today is Wednesday.".BR;
            break;
        case "THU":
            echo "Today is Thursday.".BR;
            break;
        case "FRI":
            echo "Today is Friday.".BR;
            break;
        case "SAT":
            echo "Today is Saturday.".BR;
            break;
        case "SUN":
            echo "Today is Sunday.".BR;
            break;
        default:
            echo "No Day.".BR;
            break;
    }

    //Basic=20
    //Normal=30
    //High=40
    //Extra High=50
    $value=30;
    switch($value){
        case 20:
            echo "Basic".BR;
            break;
        case 30:
            echo "Normal".BR;
            break;
        case 40:
            echo "High".BR;
            break;
        case 50:
            echo "Extra High".BR;
            break;
    }
    
?>