<?php
include('./include/connect.php');
include('./function/common_function.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <style>

.cart_img {
	width: 80px;
	height: 80px;
	object-fit: contain;
}

    </style>
</head>
</head>
<body>
    <!-- Navbar Section -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping-fast">Cart</i><sup><?php cart_item(); ?></sup></a>
        </li>

      </ul>
      
    </div>
  </div>
</nav>
    </div>

    <nav class="navbar navbar-expand-lg bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
    </ul>

    </nav>

 <!-- calling Cart Func -->

<?php
cart();
?>



    <!-- nav end -->

    <!-- Heading section -->
<div class="bg-light">
    <h3 class="text-center">Our Products</h3>
    <p class="text-center">“Amazing things will happen when you listen to the consumer.”</p>
</div>

<!-- Table section -->

<div class="container">
    <div class="row">
        <form action="" method="post">
        <table class=" table table-bordered text-center">
     
  <!-- Display Dynac Data section -->
  <?php

global $con;
$ip=getIPAddress();
$total=0;
$cart_query="select * from `cart_details` where ip_address='$ip'";
$result=mysqli_query($con,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){
    echo "
    <thead>
    <tr>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Remove</th>
        <th colspan='2'>Operation</th>
    </tr>
</thead>
<tbody>
";
while($row=mysqli_fetch_array($result)){
  $product_id=$row['product_id'];
  $select_product="select * from `product` where produc_id='$product_id'";
  $result_product=mysqli_query($con,$select_product);
  while($row_product_price=mysqli_fetch_array($result_product)){
   $product_price=array($row_product_price['product_price']);
   $price_table=$row_product_price['product_price'];
   $product_name=$row_product_price['product_name'];
   $product_image=$row_product_price['product_image'];
   $product_value=array_sum($product_price);
   $total+=$product_value;

?>



<tr>
    <td>
        <?php  echo "$product_name" ?>
    </td>
    <td><img src="./Admin/product_image/<?php  echo "$product_image" ?>" alt="" class="cart_img"></td>
    <td><input type="text" name="qty" class="form-input w-50"></td>
    <?php 
     $ip=getIPAddress();
if(isset($_POST['update_cart'])){

$quantity=$_POST['qty'];
$update_cart="update `cart_details` set quantity=$quantity where ip_address='$ip'";
$result_product_quantity=mysqli_query($con,$update_cart);
$total=$total*$quantity;

}




      ?>
    <td><?php  echo "$price_table" ?>/-</td>
    <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
    <td>
    <input type="submit" class="bg-info px-3 py-2 border-0 mx-3" value="Update" name="update_cart">
       <!-- <button class=" bg-info px-3 py-2 border-0 mx-3">Update</button> -->
       <input type="submit" class="bg-info px-3 py-2 border-0 mx-3" value="Remove" name="remove_cart">
       <!-- <button class=" bg-info px-3 py-2 border-0 mx-3">Remove</button> -->
    </td>
</tr>

<?php
  }
}
}
else{
    echo "
    <h2 class='bg-danger text-center'>No Products Found</h2>
    ";
}
?>

</tbody>
        </table>

<!-- Subtotal section -->
<div class="d-flex mb-5">
<?php

global $con;
$ip=getIPAddress();

$cart_query="select * from `cart_details` where ip_address='$ip'";
$result=mysqli_query($con,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){
    echo "
    <h4 calss='px-3'>Subtotal: <strong class='text-success'> $total /-
    </strong></h4>
    <input type='submit' class='bg-info px-3 py-2 border-0 mx-3' value='Continue Shopping' name='continue_shopping'>
    <button class='bg-secondary px-3 py-2 border-0 text-light'><a href='user_area/checkout.php' class='text-light text-decoration-none' >Check Out</a></button>";
}
else{
    echo "<input type='submit' class='bg-info px-3 py-2 border-0 mx-3' value='Continue Shopping' name='continue_shopping'>";
}

if(isset($_POST['continue_shopping'])){
    echo "<script>window.open('index.php','_self')</script>";
}
 

?>



   
</div>


    </div>
</div>
</form>
<!-- remove cart item -->
<?php

function remove_cart_item(){
    global $con;
  if(isset($_POST['remove_cart'])){
    foreach($_POST['removeitem'] as $remove_id){
        echo $remove_id;
        $delete_query="DELETE FROM `cart_details` WHERE product_id=$remove_id";
        $run_delete=mysqli_query($con,$delete_query);
        if($run_delete)
        {
            echo "<script>window.open('cart.php','_self')</script>";
  }
}

  }
}

echo $remove_item=remove_cart_item();
?>



 
<!-- Footer section -->

<?php include("./include/footer.php")  ?>

<!-- Bootstrap Js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


</body>
</html>