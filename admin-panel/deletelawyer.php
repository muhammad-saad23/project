<?php
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
include("../config.php");


$lawyer_id=$_GET['id'];

$delete="DELETE FROM `lawyer` where `case`='$lawyer_id'";
$run_query=mysqli_query($connection,$delete);

if ($run_query) {
    echo '<script> window.location.href(viewlawyer.php) </script>';
}else{
    echo 'query failed';
}

?>

