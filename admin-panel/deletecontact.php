<?php
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
include("../config.php");


$contact_id=$_GET['id'];

$delete="DELETE FROM `contact` where id='$contact_id'";
$run_query=mysqli_query($connection,$delete);

if ($run_query) {
    echo '<script>window.location.href="viewcontact.php" </script>';
}else{
    echo 'query failed';
}

?>

