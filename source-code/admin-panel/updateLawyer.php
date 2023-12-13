<?php
include("../config.php");

if (isset($_POST['update'])) {
    $lawyer_id=$_POST['id'];
    $lawyer_name=$_POST['name'];
    $lawyer_case=$_POST['case'];
    $lawyer_email=$_POST['email'];
    $lawyer_phone=$_POST['phone'];
    $lawyer_exper=$_POST['experience'];
    $lawyer_address=$_POST['address'];
    $lawyer_image=$_FILES['image']['name'];
    $temp_img=$_FILES['image']['tmp_name'];
    $image_size=$_FILES['image']['size'];

    move_uploaded_file($temp_img,'image/'.$lawyer_image);

    $update="UPDATE `lawyer` set `name`='$lawyer_name',`case`='$lawyer_case',`email`='$lawyer_email',`phone`='$lawyer_phone',`experience`='$lawyer_exper',`address`='$lawyer_address',`image`='$lawyer_image' where id='$lawyer_id'";
    
    $run_query=mysqli_query($connection,$update);

    if ($run_query) {
        header('location:viewlawyer.php');
    }else{
        echo "query failed";
    }
}
?>