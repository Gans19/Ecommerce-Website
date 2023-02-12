<?php
include('../include/connect.php');
include('../function/common_function.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <style>
        body{
            overflow-x:hidden;
        }
        
    </style>
</head>
<body>
<div class="container-fluid m-3">
    <h2 class="text-center">
User Login
    </h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
                <!-- usernmae -->
<label for="user_username" class="form-label">User Name:</label>
<input type="text" id="user_username" class="form-control" placeholder="Enter Your User Name" required="required" name="user_username">
</div>


 <!--password -->
 <div class="form-outline mb-4">
 <label for="user_password" class="form-label">User Password:</label>
<input type="password" id="user_password" class="form-control" placeholder="Enter Your Password" required="required" name="user_password">
</div>
<!--Login -->
<div class="mt-4 pt-2">
    <input type="submit" value="Login" class="bg-info border-0 py-2 px-3" name="user_login">
    <p class="small fw-bold mt-2 pt-1 mb-0">Don't Have An Account? <a href="user_registration.php" class="decoration-none text-danger">Register Account.</a></p>
</div>

        </form>
        </div>
    </div>
</div>
</body>
</html>

<?php 

if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
  $select_query="select * from `user_table` where username='$user_username'";
  $result=mysqli_query($con,$select_query);
  $row_count=mysqli_num_rows($result);
  $row_data=mysqli_fetch_assoc($result);
  $ip=getIPAddress();
  
//   cart Item
$select_query_cart="select * from `cart_details` where ip_address='$ip'";
$select_cart=mysqli_query($con,$select_query_cart);
$row_count_cart=mysqli_num_rows($select_cart);
  
  
  
  if($row_count>0) {
    if(password_verify($user_password,$row_data['user_password'])){
        // echo "<script>alert('Login Successfully!')</script>";
        if($row_count==1 and $row_count_cart==0){
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.open('profile.php',_self)</script>";
        }else{
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.open('payment.php',_self)</script>";
        }
    }else{
        echo "<script>alert('Invalid')</script>";
    }
  
}else{
    echo "<script>alert('Invalid')</script>";
}



}



?>