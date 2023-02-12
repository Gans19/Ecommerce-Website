<?php
include('../include/connect.php');

if(isset($_POST['insert_cat'])){
    $cat_name=$_POST['cat-title'];

$select_query="select * from `category` where cat_name='$cat_name'";
$result_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
    echo "<script>alert('This is present inside the database')</script>";
}
else{


    $insert_query="insert into `category` (cat_name) values ('$cat_name')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Category Has been Inserted Successfully')</script>";
        }
}}
?>



<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic_addon1">
        <i class="fa-solid fa-receip"></i>
    </span>
    <input type="text" class="form-control" placeholder="Enter Category" aria-describedby="basic_addon1"
    aria-lable="category" name="cat-title">
</div>


<div class="input-group w-10 mb-2 m-auto">
    <!-- <button class="form-control bg-info btn-hero p-2 border-0 m-3" name="insert_cat">Insert Category</button> -->
   <input type="submit" class="bg-info btn-hero p-2 border-0 m-3" name="insert_cat" value="Insert Category">
</div>
</form>