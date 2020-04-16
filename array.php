<?php
    define("BR","<br />");

    //$colors=array("Black","White","Green","Yellow");
    
    $colors[5]="Black";
    $colors[6]="White";
    $colors[7]="Red";
    $colors[8]="Blue";

    //echo "My Fav Color is ".$colors[5]." and ".$colors[6]." is used for peace and ".$colors[7]." Presents the Fire and ".$colors[8]." presents the coolness".BR;

    $name=array("Qasim","Faisal","Kaleem","Kashif","Ali");
    $salary=array("Qasim"=>25000,"Kashif"=>29000,"Faisal"=>30000,"Kaleem"=>22000,"Ali"=>35000);
    $city=array("Qasim"=>"Karachi","Kashif"=>"Lahore","Faisal"=>"Gujrat","Kaleem"=>"Attock","Ali"=>"Sargodha");
    /*if(is_array($name)){
        for($a=0;$a<count($name);$a++){
            $empName=$name[$a];
            echo $empName." is our emplyee and taking PKR ".$salary[$empName]." Salary and he is from ".$city[$empName].BR;
        }
    }*/
    $names=array(
            "Qasim"=>["Salary"=>25000,"City"=>"Karachi"],
            "Faisal"=>["Salary"=>23000,"City"=>"Lahore"],
            "Ali Khan"=>["Salary"=>30000,"City"=>"Peshawar"]
    );
    shuffle($name);
    echo "<pre>";
    print_r($name);
    echo "</pre>";

    $URL="phpdocs.com/php/variables";
    $URLArray=explode('/',$URL);

    echo "<pre>";
    print_r($URLArray);
    echo "</pre>";
  
    



?>