<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload</title>
</head>
<body>
        <?php
            if(isset($_POST['btnSubmit'])){
                $org_name=$_FILES['fiPictures']['name']; //Fetch Orignal File Name
                $org_type=$_FILES['fiPictures']['type']; //Fetch File Type
                $org_size=$_FILES['fiPictures']['size']; //Fetch File Size in Bytes
                //Fetching Ext From File Type
                $extArray=explode("/",$org_type);

                echo "File Name=".$org_name."<br />";
                echo "File Type=".$org_type."<br />";
                echo "File Document Type=".$extArray[0]."<br />";
                echo "File Ext=".$extArray[1]."<br />";
                echo "File Size in KB=".($org_size/1024)."<br />";
                if($org_type=="image/png" && ($org_size/1024)<=500){
                    if(move_uploaded_file($_FILES['fiPictures']['tmp_name'],$org_name)){
                        echo "Sucessfully Uploaded File to Server";
                    }else{
                        echo "Please Try Again.";
                    }
                }else{
                    echo "Your File Have Type or Size Issue. Please correct it and upload again.";
                }

            }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="fiPictures" />
            <br />
            <input type="submit" name="btnSubmit" value="Upload" />
        </form>
</body>
</html>