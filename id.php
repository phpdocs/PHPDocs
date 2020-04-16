<h1>Increment/Decrement</h1>
<?php
    define("BR","<br />");

    $a=20;

    echo 'This is Orginal Value of $a='.$a.BR;
    echo 'Pre Increment Value of $a='.++$a.BR;
    echo 'Post Increment Value of $a='.$a++.BR;
    echo 'Value After Post Increment='.$a.BR;

    echo BR.BR.BR;
    echo "Decrement".BR;
    echo 'This Is Orginal Value of $a='.$a.BR;
    echo 'Pre Decrement Value of $a='.--$a.BR;
    echo 'Post Decrement value of $a='.$a--.BR;
    echo 'Value After Post Decrement='.$a;
    

?>