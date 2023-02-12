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
    <title>E-Commerce Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
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
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping-fast"></i><sup><?php cart_item(); ?></sup></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Total Amount : <?php total_cart_price();  ?>/-</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
              <input type="submit" class="btn btn-outline-light" value="Search" name="search_data_product">
      </form>
    </div>
  </div>
</nav>




 <!-- calling Cart Func -->

 <?php
cart();
?>





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
    <!-- nav end -->

    <!-- Heading section -->
<div class="bg-light">
    <h3 class="text-center">Our Products</h3>
    <p class="text-center">“Amazing things will happen when you listen to the consumer.”</p>
</div>

 <!-- Products section -->
<div class="row p-1">
<div class="col-md">
    <div class="row">

 <!-- Fetching Products section -->
 <?php
search_product();
get_unique_category();

?>
        
</div>
</div>

<!-- Footer section -->

<?php include("./include/footer.php")  ?>

<!-- Bootstrap Js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


</body>
</html>