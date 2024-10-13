<?php

$email=$_POST['email'];
$pass1=$_POST['pass1'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

include_once "../shared/connection.php";

$cmd="insert into customer_user(email,password,mobile,delivery_address) values('$email','$pass1','$mobile','$address')";

echo $cmd;
$status=mysqli_query($conn,$cmd);
if($status)
{
    echo "Registration Sucess";
    //Redirect to Login
    header('location:index.html');
}
else
{
    echo "Email id already taken, try different username!!!";
    echo mysqli_error($conn);
}




?>