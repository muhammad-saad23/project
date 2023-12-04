<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include("../config.php");

if (isset($_POST['update'])) {
    $client_id=$_POST['id'];
    $client_name=$_POST['name'];
    $client_age=$_POST['age'];
    $client_email=$_POST['email'];
    $client_phone=$_POST['phone'];
    $client_address=$_POST['address'];
  

   

    $update="UPDATE `client_register` set `name`='$client_name',`age`='$client_age',`email`='$client_email',`phone`='$client_phone',`address`='$client_address' where id='$client_id'";
    $conn_query=mysqli_query($connection,$update);

    if ($conn_query) {
        echo "<script> alert('Updated successfully')
                        window.location.href='viewclient.php';
                       </script>";
    }else{
        echo "query failed";
    }
}
?>