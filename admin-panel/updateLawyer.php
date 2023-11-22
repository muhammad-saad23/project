<?php
include("../config.php");

if (isset($_POST['update'])) {
    $lawyer_id=$_POST['id'];
    $lawyer_name=$_POST['name'];
    $lawyer_case=$_POST['case'];
    $lawyer_email=$_POST['email'];
    $lawyer_phone=$_POST['phone'];
    $lawyer_address=$_POST['address'];
    $lawyer_image=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_image'];
    $image_size=$_FILES['image']['size'];

    move_uploaded_file($tmp_image,'image/'.$lawyer_image);

    $update="UPDATE `lawyer` set `name`='$lawyer_name',`case`='$lawyer_case',`email`='$lawyer_email',`phone`='$lawyer_phone',`address`='$lawyer_address',`image`='$lawyer_image' where id='$lawyer_id'";
    $result=mysqli_query($connection,$update);

    if ($result) {
        header("location:viewlawyer.php");
    }else{
        echo "query failed";
    }
}
?>