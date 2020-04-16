<h1>Assignment Operator</h1>
<?php
    define("BR","<br />");
    $a=20;
    $b=3;

    $a+=$b;
    echo 'This is a New Value of $a='.$a.BR;

    $a-=$b;
    echo 'This ia again New value of $a after Subtraction='.$a.BR;

    $a*=$b;
    echo "Multiplication $a=".$a.BR;

    $a/=$b;
    echo "Division $a=".$a.BR;

    $a%=$b;
    echo "Mod $a=".$a.BR;

?>