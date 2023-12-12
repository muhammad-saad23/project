<?php
include("../config.php");

session_start();

unset($_SESSION['useremail']);

header("location:../lawyerlogin.php");
?>