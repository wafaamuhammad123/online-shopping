<?php

include('config.php');

// Check if the product ID is provided in the URL
if (isset($_GET['id'])) {

    $productId = $_GET['id'];
    $deleteQuery = "DELETE FROM product WHERE id = $productId";
    $deleteResult = mysqli_query($con, $deleteQuery);

    if (!$deleteResult) {
        die("Delete query failed: " . mysqli_error($con));
    }


    header("Location: products.php");
    exit();
} else {

    header("Location: products.php");
    exit();
}
?>
