<?php
// update.php

include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];

    // Update the product in the database
    $updateQuery = "UPDATE product SET name = '$productName',price = '$productPrice' WHERE id = $productId";
    $updateResult = mysqli_query($con, $updateQuery);

    if (!$updateResult) {
        die("Update query failed: " . mysqli_error($con));
    }

    // Redirect back to the product page after update
    header("Location: products.php");
    exit();
} else {
    // Redirect to the product page if the form is not submitted via POST
    header("Location: products.php");
    exit();
}
?>
