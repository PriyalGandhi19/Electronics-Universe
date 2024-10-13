<?php
session_start();
if(!isset($_SESSION['login']))
{
    echo "Unauthorized Attempt";
    die;
}
if($_SESSION['login']==false)
{
    echo "Unauthorized Attempt";
    die;
}
$email=$_SESSION['customer_email'];
?>