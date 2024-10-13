<?php

    $conn=new mysqli('localhost','root','','priyal');
    if($conn->connect_error)
    {
        echo "Connection failed";
        die;
    }
    
?>