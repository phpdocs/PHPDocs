<?php
    $message="";
    if(isset($_POST['btnSubmit'])){
        require_once("functions.php");
        $UserName=check_input($_POST['txtUserName']);
        $Password=check_input($_POST['txtPassword']);

        if(empty($UserName) || empty($Password)){
            $message="Please Enter UserName/Password";
        }else{
            require_once("dbconnection.php");

            $LoginQuery="SELECT user_id FROM users WHERE";
            $LoginQuery.=" user_username='".$UserName."' AND user_password='".md5($Password)."'";

            $result=mysqli_query($conn,$LoginQuery);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);

                //Start The Session
                session_start();
                $_SESSION['UserID']=$row['user_id'];
                $_SESSION['UserName']=$UserName;
                $_SESSION['Auth']=true;

                //Set the Cookie
                setcookie("Auth",true,time()+21600);

                //Redirect the user to Index Page
                header("Location: index.php");

            }else{
                $message="Incorrect UserName/Password Please try Again.";
            }

            mysqli_close($conn);
        }
        
    }

?>