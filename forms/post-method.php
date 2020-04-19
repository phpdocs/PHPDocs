<?php
    if(isset($_REQUEST['btnSubmit'])){
        echo "Welcome to PHPDocs Mr. ".$_REQUEST['txtUserName']." Using Post Method";
    }else
        echo "No Form Data";
        
?>