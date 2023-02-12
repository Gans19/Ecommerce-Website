<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  

    <link rel="icon" href="../img/icon2.png" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">

    <style>
        .admin-img{
  width: 100px;
  object-fit: contain;
}
    </style>

</head>
<body>
<!-- Navbar section -->
<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid navbar-brand">
                <img src="../img/logo.png" alt="">
                <nav class="navbar-nav navbar-expand-lg">
                <ul class="navbar-nav">
                  <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Welcome Guest!</a>
        </li>
</ul>
</nav>      
</div>
</nav>

<!-- Details section -->
<div class="bg-light">
    <h3 class="text-center">Manage Data</h3>
    <div class="row p-3">
        <div class="col-md-12 bg-secondary p-1 m-1 d-flex ">
       <img src="../img/logo.png" alt="" class="admin-img">
       <p class="text-light text-center">Admin</p>
     </div>

<!-- Button section -->

  <div class="button text-center">
    <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Product</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">View Product</a></button>
    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Category</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">View Category</a></button>
    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brand</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">View Brand</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
  </div>
  </div>   
</div>

<!-- input category section -->
<div class="container my-5">
<?php
if(isset($_GET['insert_category'])){
  include('insert_category.php');
}
if(isset($_GET['insert_brand'])){
  include('insert_brands.php');
}
?>
</div>






<!-- Footer section -->
<div class="bg-info p-0 footer">
      <footer
      <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5 p-0">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #929fba"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
             
            E-KART
            </h6>
            <p>
            “Good customer service begins at the top. If your senior people don’t get it, even the strongest links further down the line can become compromised.” 
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
           
          </div>
        

          <hr class="w-100 clearfix d-md-none" />

          
          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Chennai,119,India</p>
            <p><i class="fas fa-envelope mr-3"></i> info.ekart@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i>044 7565768</p>
            <p><i class="fas fa-print mr-3"></i> +91 8656575456</p>
          </div>
         
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>

            <!-- Linkedin -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="#!"
               role="button"
               ><i class="fab fa-linkedin-in"></i
              ></a>
            <!-- Github -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #333333"
               href="#!"
               role="button"
               ><i class="fab fa-github"></i
              ></a>
          </div>
        </div>
        
      </section>
      
    </div>
   

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="#"
         >E-Kart.com</a
        >
    </div>
 
  </footer>
  
</div>

    
</div>

<!-- Bootstrap Js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


</body>
</html>