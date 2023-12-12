<?php
session_start();

unset($_SESSION['clientemail']);

header("location:index.php");

?>