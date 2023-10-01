<?php
//error_reporting(0);// ya hmri warning ko khtm krta hy
 $servername = "localhost";
 $username= "root";
 $password = "";
 $dbname ="curd3";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
   
    if($conn){
        echo "connection succeful";
    }
    else{
        echo "connection is fail".mysqli_connect_error();
    }



?>