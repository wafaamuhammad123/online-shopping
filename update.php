<?php
// update.php

include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];

    $IMAGE=$_POST['image'];
    $IMAGE_LOCATION=$_FILES['image']['tmp_name'];
    $IMAGE_NAME=$_FILES['image']['name'];
    $IMAGE_FOLDER="images/".$IMAGE_NAME;
    
    $updateQuery = "UPDATE product SET name = '$productName', price = '$productPrice', image='$IMAGE_FOLDER' WHERE id = $productId";
    $updateResult = mysqli_query($con, $updateQuery);

    mysqli_query($con, $updateQuery);//to connect with db and insert the data in db
    if(move_uploaded_file($IMAGE_LOCATION,'images/'.$IMAGE_NAME))//at uploading the files..save the img name in the folder imgs 
    {
          echo "<script>alert('Update successful');</script>";
    } else {
        echo "<script>alert('Update failed');</script>";
    }

    header("Location: products.php");
    exit();
}
?>
