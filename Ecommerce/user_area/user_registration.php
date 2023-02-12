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
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
</head>
<body>
    
<div class="container-fluid m-3">
    <h2 class="text-center">
New User Registration
    </h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
                <!-- usernmae -->
<label for="user_username" class="form-label">User Name:</label>
<input type="text" id="user_username" class="form-control" placeholder="Enter Your User Name" required="required" name="user_username">
</div>
   <!-- email -->
   <div class="form-outline mb-4">
   <label for="user_email" class="form-label">User Email:</label>
<input type="email" id="user_email" class="form-control" placeholder="Enter Your Email" required="required" name="user_email">
</div>  
 <!-- image -->
 <div class="form-outline mb-4">
 <label for="user_image" class="form-label">User image:</label>
<input type="file" id="user_image" class="form-control"  required="required" name="user_image">
</div>
 <!--password -->
 <div class="form-outline mb-4">
 <label for="user_password" class="form-label">User Password:</label>
<input type="password" id="user_password" class="form-control" placeholder="Enter Your Password" required="required" name="user_password">
</div>
 <!-- cnfirm password -->
 <div class="form-outline mb-4">
 <label for="conf_user_password" class="form-label">Confirm Password:</label>
<input type="password" id="conf_user_password" class="form-control" placeholder="Confirm Your Password" required="required" name="conf_user_password">
</div>
             <!-- address -->
             <div class="form-outline mb-4">
             <label for="user_address" class="form-label">Address :</label>
<input type="text" id="user_address" class="form-control" placeholder="Enter Your Address" required="required" name="user_address">
</div>
             <!-- Contact -->
             <div class="form-outline mb-4">
             <label for="user_mobile" class="form-label">Contact :</label>
<input type="text" id="user_mobile" class="form-control" placeholder="Enter Your Mobile Number" required="required" name="user_mobile">
</div>
<div class="mt-4 pt-2">
    <input type="submit" value="Register" class="bg-info border-0 py-2 px-3" name="user_register">
    <p class="small fw-bold mt-2 pt-1 mb-0">Already Have An Account? <a href="user_login.php" class="decoration-none text-danger">Login Account.</a></p>
</div>

        </form>
        </div>
    </div>
</div>
</body>
</html>



<!-- php code -->
<?php

if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_mobile=$_POST['user_mobile'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_temp=$_FILES['user_image']['tmp_name'];
    $user_email=$_POST['user_email'];
    $user_ip=getIPAddress();

   // Checking Query
$select_query="select * from `user_table` where username='$user_username'";
$result_query=mysqli_query($con,$select_query);
$rows_count=mysqli_num_rows($result_query);


    // inser Query
move_uploaded_file($user_image_temp,"./user_images/$user_image");
    $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) values ('$user_username','$user_email','$hash_password','$user_image','$user_ip','$user_address','$user_mobile')";
    $sql_executes=mysqli_query($con,$insert_query);

if($sql_executes){
    echo "<script>alert('Data Inserted Successfully')</script>";
}else{
    die(mysqli_error($con));
}

// selecting cart item
$select_cart_items="select * from `cart_details` where ip_address=$user_ip";

$result_cart=mysqli_query($con,$select_cart_items);
$rows_count=mysqli_num_rows($result_cart);

if($rows_count>0){
    $_SESSION['username']=$user_username;
    echo "<script>alert('items there')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
}
else{
    echo "<script>window.open('../index.php','_self')</script>";
}
}

?>