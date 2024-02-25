<?php
include 'Connect.php';
date_default_timezone_set("Asia/Karachi");

if(isset($_REQUEST['Signup'])){
    $uname =  $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $role = "User";
    $date = date('Y-m-d H:i:s');
    $checkemail = "SELECT * FROM signup WHERE Email='$email'";
    $query = mysqli_query($con, $checkemail);
    $result = mysqli_fetch_array($query);
    if($result['Email'] == $email){

        header("Location: Registeration.php?error=Email Already Exsist");
    }
    else{
    $sqlquery = "INSERT INTO `signup`(`Username`, `Email`, `Password`, `Roles`,`CreateAt`) VALUES ('$uname','$email','$pass','$role','$date')";
    mysqli_query($con,$sqlquery);
    mysqli_close($con);
    header("location: Registeration.php?success= Succesfully Created");
    }
}
