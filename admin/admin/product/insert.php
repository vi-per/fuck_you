<?php

if(isset($_POST['submit'])){

    include 'db.php';

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "Uploadimage/".$image_name;
    move_uploaded_file($image_loc, "../Uploadimage/".$image_name);

    $product_category = $_POST['Pages'];
    $product_category1 = $_POST['Pages1'];
    $product_category2 = $_POST['Pages2'];

    mysqli_query($conn, " INSERT INTO `product`(`PName`, `PPrice`, `Pimage`, `PCategory`) VALUES ('$product_name','$product_price','$img_des','$product_category') ");
    header("location:../mystore.php");
}

?>



