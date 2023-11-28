<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shopping</title>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <!-- y3ne hrf3 sora aw vid aw text m3 b3d -->
         <h2> online shopping </h2>
         <img src="shopping-online-shop-red-icon-background-im-vector-20439949.jpg" alt="logo" width="20%"/>

         <input type="text" name="name" placeholder="Enter the product name"/> <br/>
         <input type="text" name="price" placeholder="Enter the Price"/> <br/>
         <input type="file" id="file" name='image' > </input> <br/>
         <label for="file" >choose file </label><br/>
         <button name="upload"> upload </button> <br/>
           <a href="products.php"> All the products </a>
</div>
        <p> </p>
        </form>
</center>
</body>
</html>