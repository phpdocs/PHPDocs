<?php
        require_once("functions.php");
        if(isset($_POST['btnSubmit'])){
            //Validate Here
            $txtFirstName=check_input($_POST['txtFirstName']);
            $txtLastName=check_input($_POST['txtLastName']);
            $txtEmail=check_input($_POST['txtEmailAddress']);
            $txtUserName=check_input($_POST['txtUserName']);
            $txtPassword=check_input($_POST['txtPassword']);
            $txtAgainPassword=check_input($_POST['txtReTypePassword']);
            $txtUserid=check_input($_POST['txtUserID']);
            $validation=false;
            echo "<p><ul>";
            //First Name
            if(empty($txtFirstName) || !checkOnlyText($txtFirstName)){
                echo "<li>Please Enter First Name</li>";
                $validation=true;
            } 

            //Last Name
            if(empty($txtLastName) || !checkOnlyText($txtLastName)){
                echo "<li>Please Enter Last Name</li>";
                $validation=true;
            }

            //Email Validation
            if(empty($txtEmail) || !filter_var($txtEmail, FILTER_VALIDATE_EMAIL)){
                echo "<li>Please Enter Proper Email</li>";
                $validation=true;
            }

            //Last Name
            if(empty($txtUserName) || !checkOnlyText($txtUserName)){
                echo "<li>Please Enter Proper UserName</li>";
                $validation=true;
            }

            //Verifiy Password
            if(empty($txtPassword) || empty($txtAgainPassword) || $txtPassword!=$txtAgainPassword ){
                echo "<li>Please Verify your password</li>";
                $validation=true;
            }

            echo "</ul></p>";

            if($validation==false){
                //Move towards Record Storage
                require_once("dbconnection.php");
                $RecordUpdateQuery="UPDATE users SET ";
                $RecordUpdateQuery.="user_first_name='".$txtFirstName."',";
                $RecordUpdateQuery.="user_last_name='".$txtLastName."',";
                $RecordUpdateQuery.="user_email='".$txtEmail."',";
                $RecordUpdateQuery.="user_username='".$txtUserName."',";
                $RecordUpdateQuery.="user_password='".md5($txtPassword)."'";
                $RecordUpdateQuery.=" WHERE user_id=".$txtUserid;
                
                //echo $RecordUpdateQuery;
                $result=mysqli_query($conn,$RecordUpdateQuery);
                if($result===true){
                    echo "Your Record Has been Updated Sucessfully.";
                }else{
                    echo "Err:".mysqli_error($conn);
                }

                mysqli_close($conn);
            }

        }
?>