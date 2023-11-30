<?php
include("../config.php");

if (isset($_POST['register'])) {
	$login_email=$_POST['email'];
	$login_password=$_POST['password'];

	$lawyer_email=$_GET['email'];
	$select="SELECT *from `lawyer` as l inner join `cases` as c on l.case=c.cid where email='$lawyer_email'";
	$run=mysqli_query($connection,$select);

	if ($run) {
        if (mysqli_num_rows($run)>0) {
            $data=mysqli_fetch_assoc($run);

            $db_password=$data['password'];
            $pass_verify=password_verify($login_password,$db_password);

            if ($pass_verify) {
                
                
                echo "<script> alert('login successfully')
                        window.location.href='index.php';
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
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
				<h2>Register Account Form</h2>
				<div class="form-row">
					<label for="email">Email</label>
					<input type="email" name="Email" id="email" class="input-text" placeholder="Your email" required>
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="your password">Password</label>
					<input type="password" name="password" id="your password" class="input-text" placeholder="Your password" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-lock"></i>
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>