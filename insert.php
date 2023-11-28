<?php

include('config.php');
if(isset($_POST['upload']))//when I press on this btn=> which has a name upload.. so execute this code 
{
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE_LOCATION=$_FILES['image']['tmp_name'];
    $IMAGE_NAME=$_FILES['image']['name'];
    $IMAGE_FOLDER="images/".$IMAGE_NAME; //when uploading any img.. save it in my folder images
    $INSERT="INSERT INTO product(name,price,image) VALUES ('$NAME','$PRICE','$IMAGE_FOLDER')";

    mysqli_query($con, $INSERT);//to connect with db and insert the data in db
    if(move_uploaded_file($IMAGE_LOCATION,'images/'.$IMAGE_NAME))//at uploading the files..save the img name in the folder imgs 
    {
        echo "<scipt> alertt('done') </script>";
    }else{

        echo "<scipt> alertt('failed') </script>";
    }

    header('location:products.php');//to not be in the same pg and be transfered to index [pg]
}



?>