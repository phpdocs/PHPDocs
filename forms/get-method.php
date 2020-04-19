<?php
    if(isset($_GET['btnSubmit'])){
        echo "Welcome". $_GET['txtUserName']. " To PHPDocs";
    }else{
        echo "No Form Values";
    }
    
?>