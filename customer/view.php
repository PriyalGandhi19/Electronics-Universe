<html>
    <head>
        <style>
            body
            {
                background-color: beige;
            }
            .mycard
            {
                width:300px;
                height:fit-content;
                display:inline-block;
                border:5px solid black;
                margin:10px;
                padding:5px;
            }
            .mycard img
            {
                width:280px;
                height:150px;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>


<?php
include "../shared/customer_validation.php";
include "../shared/connection.php";

//include "menu.html";

$customer_id=$_SESSION['customer_id'];

$cmd="select * from product";
$result=mysqli_query($conn,$cmd);

while($row=mysqli_fetch_assoc($result))
{

    $pid=$row['pid'];
    $name=$row['name'];
    $detail=$row['detail'];
    $price=$row['price'];
    $impath=$row['impath'];
    
    echo "<div class='mycard'>
        <h3>$name</h3>
        <h2>$detail</h2>
        <h2>$price</h2>
        <img src='$impath'>
        
        <div class='d-flex justify-content-between'>
        <a href='addcart.php?pid=$pid'>
            <button class='btn btn-danger'>Add to Cart</button>
        </a>   
           
        </div>
    </div>";
}



?>