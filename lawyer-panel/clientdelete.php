<?php
include("../config.php");

$client_id=$_GET['id'];
$delete="DELETE from `client_register` where id='$client_id'";
$query=mysqli_query($connection,$delete);

if ($query) {
    echo '<script>window.location.href="viewclient.php" </script>';
}else{
    echo 'query failed';
}

?>