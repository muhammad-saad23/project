<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include("../config.php");

if (isset($_POST['update'])) {
    $lawyer_id=$_POST['id'];
    $lawyer_name=$_POST['name'];
    $lawyer_case=$_POST['case'];
    $lawyer_email=$_POST['email'];
    $lawyer_password=$_POST['password'];
    $lawyer_phone=$_POST['phone'];
    $lawyer_exper=$_POST['experience'];
    $lawyer_address=$_POST['address'];
    $lawyer_img=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $img_size=$_FILES['image']['size'];

    move_uploaded_file($tmp_name,'../admin-panel/image/'.$lawyer_img);
    $Enc_pass=password_hash($lawyer_password,PASSWORD_BCRYPT);

    $update="UPDATE `lawyer` set `name`='$lawyer_name',`case`='$lawyer_case',`email`='$lawyer_email',`password`='$Enc_pass',`phone`='$lawyer_phone',`address`='$lawyer_address',`experience`='$lawyer_exper',`image`='$lawyer_img' where id='$lawyer_id'";
    $conn_query=mysqli_query($connection,$update);

    if ($conn_query) {
        echo "<script> alert('Updated successfully')
                        window.location.href='index.php';
                       </script>";
    }else{
        echo "query failed";
    }
}
?>