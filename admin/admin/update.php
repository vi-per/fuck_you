<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Product_page</title>
</head>

<body>


<?php
if($_GET['id']!=null){
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','project');
$Record = mysqli_query($conn,"SELECT * FROM `product` WHERE Id = $id ");
$data = mysqli_fetch_array($Record);
?> 

  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">
        <form action="update.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning">Product Update</p>
          </div>
          <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" value="<?php echo $data['PName'] ?>" name="Pname" class="form-control" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="text" value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-label">Add Product Image</label>
            <input type="file" name="Pimage" class="form-control" aria-describedby="emailHelp">
            <img src="<?php echo $data['Pimage'] ?>" alt="" style="height: 100px;">
          </div>
          <div class="mb-3">
            <label class="form-label">Primary Category</label>
            <select class="form-select" name="Pages">
              <option value="None">None</option>
              <option value="boyClothes">Boy's Clothes</option>
              <option value="girlClothes">Girl's Clothes</option>
              <option value="babyProducts">Baby Products</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Secondary Category</label>
            <select class="form-select" name="Pages1">
              <option value="None">None</option>
              <option value="boyindex">Boy's index</option>
              <option value="girlindex">Girl's index</option>
              <option value="babyindex">Baby index</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Index Category</label>
            <select class="form-select" name="Pages2">
              <option value="None">None</option>
              <option value="featuredindex">Featured Products</option>
              <option value="latestindex">Latest Products</option>
              <option value="mostindex">Most Visited</option>
            </select>
          </div>
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
          <button name="update" class="bg-danger fs-4 fe-bold my-3 form-control text-white">UPDATE</button>
        </form>
      </div>
    </div>
  </div>
   <?php
}
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "Uploadimage/".$image_name;
    move_uploaded_file($image_loc, "Uploadimage/".$image_name);

    $product_category = $_POST['Pages'];
    $product_category1 = $_POST['Pages1'];
    $product_category2 = $_POST['Pages2'];
    include 'db.php';
    mysqli_query($conn," UPDATE `product` SET `PName`='$product_name',`PPrice`='$product_price',`Pimage`='$img_des',`PCategory`='$product_category',`PCategory1`='$product_category1',`PCategory2`='$product_category2' WHERE id = $id ");
    header("location:../admin/mystore.php");
    



   }
   
   ?>


  
</body>

</html>



























