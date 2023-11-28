<?php
// edit.php

include('config.php');

// Check if the product ID is provided in the URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Retrieve existing product data from the database
    $selectQuery = "SELECT * FROM product WHERE id = $productId";
    $selectResult = mysqli_query($con, $selectQuery);

    if (!$selectResult) {
        die("Select query failed: " . mysqli_error($con));
    }

    $productData = mysqli_fetch_assoc($selectResult);

    // Display the edit form
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
              crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="edit.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Product</title>
    </head>
    <body>
        <div class="container">
            <h2>Edit Product</h2>
            <form action="update.php" method="post">
              
                <input type="hidden" name="id" value="<?php echo $productData['id']; ?>">
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $productData['name']; ?>" required>
                <br>
                <label for="price">Product Price:</label>
                <input type="text" id="price" name="price" value="<?php echo $productData['price']; ?>" required>
                <br>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </body>
    </html>

    <?php
} else {
    // Redirect to the product page if no product ID is provided
    header("Location: products.php");
    exit();
}
?>
