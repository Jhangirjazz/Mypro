<?php
include '../Connect.php';
session_start();
date_default_timezone_set("Asia/Karachi");

if(isset($_REQUEST['btncat'])){
    $uname =  $_REQUEST['name'];
    $currentadmin = $_SESSION['AdminID'];
    $sqlquery = "INSERT INTO `category`(`name`, `ID_Signup`) VALUES ('$uname',$currentadmin)";
    $result = mysqli_query($con,$sqlquery);
    if($result == true){
        mysqli_close($con);
        header("location: Create.php?success= Category Succesfully Created");
   }
   else{
        header("location: Create.php?error= Category Not Added Please Try Again.");
   }
}

