<?php
// include('./include/connect.php');


// getting products

function getproduct(){
    global $con;
// condition to check isset
if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){


    $select_query="select * from `product` order by rand() LIMIT 0,20";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['produc_id'];
  $product_name=$row['product_name'];
  $product_description=$row['product_description'];
  $product_image=$row['product_image'];
  $product_price=$row['product_price'];
  $cat_id=$row['cat_id'];
  $brand_id=$row['brand_id'];
  echo " <div class='col-md-3 col-lg-3 col-xl-3 mb-2'>
   <div class='card'>
  <img src='./Admin/product_image/$product_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_name</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>Price: $product_price/-</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
    <a href='#' class='btn btn-secondary'>View Detail</a>
  </div>
</div>
</div>
";
}
}
}
}

// getting unique category

function get_all_product(){
    global $con;
// condition to check isset
if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){


    $select_query="select * from `product` order by rand()";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['produc_id'];
  $product_name=$row['product_name'];
  $product_description=$row['product_description'];
  $product_image=$row['product_image'];
  $product_price=$row['product_price'];
  $cat_id=$row['cat_id'];
  $brand_id=$row['brand_id'];
  echo " <div class='col-md-3 col-lg-3 col-xl-3 mb-2'>
   <div class='card'>
  <img src='./Admin/product_image/$product_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_name</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>Price: $product_price/-</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
    <a href='#' class='btn btn-secondary'>View Detail</a>
  </div>
</div>
</div>
";
}
}
}
}

// getting unique category
function get_unique_category(){
    global $con;
// condition to check isset
if(isset($_GET['category'])){

  $category_id=$_GET['category'];
    $select_query="select * from `product` where cat_id=$category_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No Stocks Here!</h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['produc_id'];
  $product_name=$row['product_name'];
  $product_description=$row['product_description'];
  $product_image=$row['product_image'];
  $product_price=$row['product_price'];
  $cat_id=$row['cat_id'];
  $brand_id=$row['brand_id'];
  echo " <div class='col-md-3 col-lg-3 col-xl-3 mb-2'>
   <div class='card'>
  <img src='./Admin/product_image/$product_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_name</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>Price: $product_price/-</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
    <a href='#' class='btn btn-secondary'>View Detail</a>
  </div>
</div>
</div>
";

}
}
}

// Search Product

function search_product(){
global $con;
if(isset($_GET['search_data_product'])){
  $search_data_value=$_GET['search_data'];
  $search_query="select * from `product` where product_keyword like '%$search_data_value%'";
$result_query=mysqli_query($con,$search_query);

$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No Result Match.Product Stocks Not Here!</h2>";
}

while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['produc_id'];
$product_name=$row['product_name'];
$product_description=$row['product_description'];
$product_image=$row['product_image'];
$product_price=$row['product_price'];
$cat_id=$row['cat_id'];
$brand_id=$row['brand_id'];
echo " <div class='col-md-3 col-lg-3 col-xl-3 mb-2'>
 <div class='card'>
<img src='./Admin/product_image/$product_image' class='card-img-top' alt='...'>
<div class='card-body'>
  <h5 class='card-title'>$product_name</h5>
  <p class='card-text'>$product_description</p>
  <p class='card-text'>Price: $product_price/-</p>
  <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
  <a href='#' class='btn btn-secondary'>View Detail</a>
</div>
</div>
</div>
";
}
}
}


    //getting ip is from the internet 


function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 


// cart Function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $ip=getIPAddress();
  $get_product_id=$_GET['add_to_cart'];
  $select_query="select * from `cart_details` where ip_address='$ip' and product_id=$get_product_id";
  $result_query=mysqli_query($con,$select_query);

  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
      echo "<script>alert('This Item Is Already Here!!')</script>";
      echo "<script>window.open('index.php','_self')</script>";
  }
  else{
    $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ('$get_product_id','$ip',0) ";
    $result_query=mysqli_query($con,$insert_query);
    echo "<script>window.open('index.php','_self')</script>";
    echo "<script>alert('This Item Is Added To Cart')</script>";

  }

}
}

   //getting Cart items

   function cart_item(){

    if(isset($_GET['add_to_cart'])){
      global $con;
      $ip=getIPAddress();
      $select_query="select * from `cart_details` where ip_address='$ip'";
      $result_query=mysqli_query($con,$select_query);
    
      $num_of_rows=mysqli_num_rows($result_query);
    
    }else{
        global $con;
        $ip=getIPAddress();
        $select_query="select * from `cart_details` where ip_address='$ip'";
        $result_query=mysqli_query($con,$select_query);
      
        $num_of_rows=mysqli_num_rows($result_query);
      
    
    
    }
    echo $num_of_rows;
   }

   //getting total price

function total_cart_price(){
    global $con;
    $ip=getIPAddress();
    $total=0;
    $cart_query="select * from `cart_details` where ip_address='$ip'";
    $result=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
      $product_id=$row['product_id'];
      $select_product="select * from `product` where produc_id='$product_id'";
      $result_product=mysqli_query($con,$select_product);
      while($row_product_price=mysqli_fetch_array($result_product)){
       $product_price=array($row_product_price['product_price']);
       $product_value=array_sum($product_price);
       $total+=$product_value;
      }
    }
echo $total;
}
?>