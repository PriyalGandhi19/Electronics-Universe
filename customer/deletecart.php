<?php

$cartid=$_GET['cartid'];

include_once "../shared/connection.php";

$status-=mysqli_query($conn,
"delete from cart where cartid=$cartid");

if($status)
{
    echo "Product deleted from cart successfully!";
    header('location:viewcart.php');
}

?>