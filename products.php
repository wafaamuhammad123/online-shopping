<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="products.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my products</title>
</head>
<body>
    <center>All the products </center>
    <div class='card-container'>
<?php

include('config.php');
//I need to get all the data from db to be displayed here
$query="SELECT * FROM  product";
$result=mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "
  
    <div class='card' style='width: 18rem;'>
  <img src= '$row[image]'  class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>'$row[price]'</h5>
    <p class='card-text'>  '$row[name]'</p>
    <a href='#' class='btn btn-primary'>edit</a>
    <a href='#' class='btn btn-danger'> delete</a>
  </div>
</div>

    
    
    ";
}

?>

</div>


</body>
</html>