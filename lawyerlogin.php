<?php
include("header.php");
include("config.php");

if (isset($_SESSION['clientemail'])) {
  header("location:team.php");
}

if (isset($_POST['login'])) {
  $login_email=$_POST['log_email'];
	$login_password=$_POST['log_password'];
  
	
	$select="SELECT *from `lawyer` as l inner join `cases` as c on l.case=c.cid where email='$login_email'";
	$run=mysqli_query($connection,$select);
  
	if ($run) {
    if (mysqli_num_rows($run)>0) {
      $data=mysqli_fetch_assoc($run);
      
      $db_password=$data['password'];
      $pass_verify=password_verify($login_password,$db_password);
      
      if ($pass_verify) {
              // session_start();
              $_SESSION['useremail'] =$data['email'];
              $_SESSION['id']=$data['id'];
                echo "<script> alert('login successfully')
                        window.location.href='lawyer-panel/index.php';
                       </script>";
              }else{
                echo "<script> alert(login unsuccessfully)</script>";
              }
            }else{
              echo "<script>alert(invailed password)</script>";
            }
          }else{
            echo "(query failed)";
          }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v5 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
	<section class="mt-5">
	<h1 style="text-align:center;">LAWYER LOGIN</h1>
	<div class="container mt-5">
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<div class="form-group mb-5">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address"
          name="log_email" required>
    </div>
    <div class="form-group mb-5">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control form-control-user" id="password" placeholder="Enter Password"
          name="log_password" required>
		</div>
		<div class="form-group ">
        <input href="lawyer-panel/index.php" type="submit" class="form-control form-control-user btn btn-success w-10 pb-3" name="login" required> 
      </div>
      <a href="lawyerRegister.php" style="color:#3366ff;text-decoration:underline;font-weight:700;" class="mx-auto mb-3 d-flex justify-content-center">If you Not registrated</a>
	</form>
	</div>
	</section>
</body>
</html>
<?php
include("footer.php");
?>