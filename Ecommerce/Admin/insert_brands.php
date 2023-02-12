<?php
include('../include/connect.php');

if(isset($_POST['insert_brand'])){
    $brand_name=$_POST['brand-title'];

$select_query="select * from `brand` where brand_name='$brand_name'";
$result_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
    echo "<script>alert('This Brand present inside the database')</script>";
}
else{


    $insert_query="insert into `brand` (brand_name) values ('$brand_name')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Brand Has been Inserted Successfully')</script>";
        }
}}
?>


<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic_addon1">
        <i class="fa-solid fa-receip"></i>
    </span>
    <input type="text" class="form-control" placeholder="Enter Brand Name" aria-describedby="basic_addon1"
    aria-lable="brand" name="brand-title">
</div>


<div class="input-group w-10 mb-2 m-auto">
<input type="submit" class="bg-info btn-hero p-2 border-0 m-3" name="insert_brand" value="Insert Brand">
   
</div>
</form>