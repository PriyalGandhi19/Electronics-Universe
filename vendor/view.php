<html>
    <head>
        <style>
            .mycard
            {
                width:330px;
                height:fit-content;
                display:inline-block;
                border:5px solid black;
                margin:10px;
                padding:5px;
            }
            .mycard img
            {
                
                width:310px;
                height:150px;
            }
            .hide
            {
                display:none;
            }
        </style>
    </head>
    <body>

    <script>
        function confirmdelete(pid)
        {
            butObj=document.getElementById(pid);
            butObj.style.display='block';
            // res=confirm("Do you want to Delete");
            
            // if(res)
            // {
            //    location.href='deletepdt.php?pid='+pid;
            // }
            // else
            // {
                
            // }
        }
        function deletePDT(pid)
        {
            location.href='deletepdt.php?pid='+pid;
        }
    </script>
        
    </body>
</html>


<?php
include "../shared/vendor_validation.php";
include "../shared/connection.php";

include "menu.html";

$vendor_id=$_SESSION['vendor_id'];

$cmd="select * from product where uploaded_by=$vendor_id";
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
        <h2>$price</h2>
        <img src='$impath'>
        <p>$detail</p> 
        <div class='d-flex justify-content-between'>
        <a href='editpdt.php'>
            <button class='btn btn-dark'>Edit</button>
        </a>   
            
        <div>
                <button onclick='confirmdelete($pid)' class='btn btn-dark'>Delete</button>
                <br>
                <button id=$pid class='hide' onclick='deletePDT($pid)'>Confirm</button>
                                
                </div>
            
        </div>
    </div>";
}



?>