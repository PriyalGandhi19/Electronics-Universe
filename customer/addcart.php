<?php
include_once "../shared/customer_validation.php";


$customerid=$_SESSION['customer_id'];
$pid=$_GET['pid'];

// echo "$customerid";
// echo "<br>";
// echo "$pid";

include_once "../shared/connection.php";

// check the pdt is already available for this customer ,
// get the count increment the count

// if(count=1)
// {
//     perform insert operation
// }
// else
// {
//     update
// }

$check_query="select * from 
cart where pid=$pid and customerid=$customerid";

$check_result=mysqli_query($conn,$check_query);

//$row_count=mysqli_num_rows($check_result);
$row=mysqli_fetch_assoc($check_result);
$row_count=$row['qty'];
echo "Count=$row_count";

$row_count=$row_count+1;
if($row_count==1)
{
    insert_cart($conn,$pid,$customerid,$row_count);
}
elseif($row_count>1)
{
    //$row=mysqli_fetch_assoc($check_result);
    $cartid=$row['cartid'];
    //echo "cartid=$cartid row count=$row_count";
    $cmd="update cart set qty=$row_count where cartid=$cartid";
    $status=mysqli_query($conn,$cmd);
    header("location:viewcart.php");
}
else
{
    echo "error";
}


function insert_cart($conn,$pid,$customerid,$qty)
{
    $cmd="insert into cart(pid,customerid,qty) 
    values($pid,$customerid,$qty)";

    $status=mysqli_query($conn,$cmd);
    if($status)
    {
        echo "cart added successfully";
        header("location:view.php");
    }
    else
    {
        echo "error in sql";
    }
}
?> 