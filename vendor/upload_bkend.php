<?php

include "../shared/vendor_validation.php";
include "../shared/connection.php";

$source_path=$_FILES['imfile']['tmp_name'];

date_default_timezone_set('Asia/Kolkata');
$unique_name="../shared/images/".date("d_M_Y_H_i_s").'.jpg';

move_uploaded_file($source_path,$unique_name);

$name=$_POST['name'];
$detail=$_POST['detail'];
$price=$_POST['price'];

$vendor_id=$_SESSION['vendor_id'];

$cmd="insert into product(name,price,detail,impath,uploaded_by) values('$name',$price,'$detail','$unique_name',$vendor_id)";

$status=mysqli_query($conn,$cmd);

if($status)
{
    echo "Product Uploaded Successfully!";
    header('location:view.php');
}
else
{
    echo "Error in SQL Query";
}



?>