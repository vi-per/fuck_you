<?php

if(isset($_POST['submit'])){

    include 'db.php';

    $product_name = $_POST['name'];
    $product_price = $_POST['fees'];
    $specialisation = $_POST['specialisation'];
    $product_category = $_POST['Pages'];
    $product_category1 = $_POST['Pages1'];
    $product_category2 = $_POST['Pages2'];

    mysqli_query($conn, " INSERT INTO `doctor`(`name`, `fees`, `specialisation`, `PrimaryCategory`, `SecondaryCategory`, `IndexCategory`) VALUES ('$product_name','$product_price','$specialisation','$product_category','$product_category1','$product_category2') ");
    header("location:../mystore.php");
}

?>



