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

                $InsertQuery="INSERT INTO users (user_first_name,user_last_name,user_email,user_username,user_password)";
                $InsertQuery.=" VALUES ";
                $InsertQuery.="('".$txtFirstName."',";
                $InsertQuery.="'".$txtLastName."',";
                $InsertQuery.="'".$txtEmail."',";
                $InsertQuery.="'".$txtUserName."',";
                $InsertQuery.="'".md5($txtPassword)."')";
                
                //echo $InsertQuery;
                $result=mysqli_query($conn,$InsertQuery);
                if($result===true){
                    echo "Your Record Has been Inserted Sucessfully.";
                }else{
                    echo "Err:".mysqli_error($conn);
                }

                mysqli_close($conn);
            }

        }
?>