<?php
    //Loops
    define("BR","<br />");

    $tablename=9;
    $start=5;
    $end=15;
?>
    <table border="1" cellpadding="0" cellspacing="0">
<?php
    for($a=$start;$a<=$end;$a++){
        echo "<tr><td>";
        echo $tablename." X ".$a." = ".$tablename*$a;
        echo "</td></tr>";
    }
?>
    </table>