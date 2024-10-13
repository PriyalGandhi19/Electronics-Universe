<?php

include "../shared/vendor_validation.php";

include "menu.html";
?>



<!DOCTYPE html>
<html lang="en">
<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

</head>
<body>   
    <div class=" d-flex justify-content-center align-items-center vh-100">

        <form action="upload_bkend.php" method='POST'  class="bg-dark p-4" enctype="multipart/form-data">
            <h3 class="text-white text-center">Upload Product Info</h3>

            <input name="name" class="form-control mt-2" type="text" placeholder="Product name">
            <input name="price" class="form-control mt-2" type="text" placeholder="Product price">
            <textarea name="detail" class="form-control mt-2" cols="30" rows="4" placeholder="Product Description"></textarea>
        
            <input name="imfile" class="form-control mt-2" type="file" accept=".jpg">

            <input type="submit" value="Upload" class='form-control bg-warning mt-3'>

        </form>

    </div>

</body>
</html>