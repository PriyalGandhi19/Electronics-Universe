<html>
    <head>
        <style>
            .mycard
            {
                width:300px;
                height:fit-content;
                display:inline-block;
                border:2px solid grey;
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
    <body style="background-color: darkgray;">
        
    </body>
</html>

<?php

include "../shared/customer_validation.php";
include "../shared/connection.php";

include "menu.html";

$customer_id=$_SESSION['customer_id'];

$result=mysqli_query($conn,
"select * from product join cart on cart.pid=product.pid where customerid=$customer_id");


while($row=mysqli_fetch_assoc($result))
{

    $pid=$row['pid'];
    $name=$row['name'];
    $detail=$row['detail'];
    $price=$row['price'];
    $impath=$row['impath'];
    $cartid=$row['cartid'];
    
    echo "<div class='mycard'>
        <h3>$name</h3>
        <h2>$price</h2>
        <img src='$impath'>
        <p>$detail</p> 
        <div class='d-flex justify-content-between'>
        <a href='deletecart.php?cartid=$cartid'>
            <button class='btn btn-dark'>Remove</button>
        </a>   
           
        </div>
    </div>";
}

?>