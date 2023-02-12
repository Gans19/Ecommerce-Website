<?php
include('../include/connect.php');
if(isset($_POST['insert_product'])){
    $product_name=$_POST['product_name'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_brand=$_POST['product_brand'];
    $product_price=$_POST['product_price'];


    $product_image=$_FILES['product_image']['name'];
    $temp_image=$_FILES['product_image']['tmp_name'];

    if($product_name=='' or $product_description=='' or $product_keyword=='' or $product_category=='' or $product_brand=='' or 
    $product_price=='' or $product_image==''){
        echo "<script>alert('Fill All The Available Fields ')</script>";
        exit();
    }
    else{
        move_uploaded_file($temp_image,"./product_image/$product_image");

        // insert query
        $insert_products="insert into `product` (product_name,product_description,product_keyword,cat_id,brand_id,product_image,product_price) values ('$product_name','$product_description','$product_keyword','$product_category','$product_brand','$product_image','$product_price')";
        $result_query=mysqli_query($con,$insert_products);
        if($result_query){
            echo "<script>alert('connection Success')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  

    <link rel="icon" href="../img/icon2.png" type="image/x-icon">
</head>
<body>
    <div class="container mt-3">
        <h2 class="text-center">
            Insert Products
        </h2>
<!-- input section -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_name" class="product_name" id="product_name">Product Title</label>
        <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
    </div>


<!-- description section -->

    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description" class="product_description" id="product_description">Product description</label>
        <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
    </div>

    <!-- keyword section -->

    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keyword" class="product_keyword" id="product_ keyword">Product  keyword</label>
        <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter product  keyword" autocomplete="off" required="required">
    </div>

  <!-- category section -->

  <div class="form-outline mb-4 w-50 m-auto">

<select name="product_category" id="" class="form-select">
    <option value="">Select a Category</option>
<?php
$select_query="select * from `category`";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $cat_name=$row['cat_name'];
    $cat_id=$row['cat_id'];
    echo "<option value='$cat_id'>$cat_name</option>";
}
?>

</select>

</div>


  <!--brand section -->

  <div class="form-outline mb-4 w-50 m-auto">

<select name="product_brand" id="" class="form-select">
    <option value="">Select a brand</option>

    <?php
$select_query="select * from `brand`";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $brand_name=$row['brand_name'];
    $brand_id=$row['brand_id'];
    echo "<option value='$brand_id'>$brand_name</option>";
}
?>
</select>

</div>

 <!-- image section -->

 <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image" class="product_image" id="product_image">Product  image</label>
        <input type="file" name="product_image" id="product_image" class="form-control" required="required">
    </div>

<!-- price section -->

<div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price" class="product_ price" id="product_price">Product  price</label>
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product  price" autocomplete="off" required="required">
    </div>

    <div class="form-outline mb-4 w-50 m-auto">
    <input type="submit" name="insert_product" id="product_price" class="btn btn-info mb-3 px-3" value="Insert Products">

</form>

    </div>
    
</body>
</html>