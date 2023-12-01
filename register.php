<?php

include("header.php");
include("config.php");


// registration work

// Bycrpty password
if (isset($_POST['submit'])) {
  $name=mysqli_real_escape_string($connection,$_POST['name']);
  $age=mysqli_real_escape_string($connection,$_POST['age']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);

  $Enc_pass=password_hash($password,PASSWORD_BCRYPT);

  $query="SELECT *FROM `register` where email='$email'";
  $run_query=mysqli_query($connection,$query);
  if (mysqli_num_rows($run_query)>0) {              
                echo "<script> alert ('login successful')
                window.location.href='login.php';
                </script>";
  }else{
    $insert = "INSERT INTO `register`(`name`,`email`,`age`,`password`)VALUES ('$name','$email','$age', '$Enc_pass')";
    $conn_db = mysqli_query($connection, $insert);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
    </style>
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link
          href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap"
          rel="stylesheet">
  
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  
      <!-- Libraries Stylesheet -->
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
      <!-- boostrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(212, 218, 222);">
  <!-- Section: Design Block -->
  <div class="container mt-5">
<section class="  text-lg-start">
    <style>
      body{
        background-image:url("img/login.jpg");
        background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
            }
      .rounded-t-5 {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
      }
  
      @media (min-width: 992px) {
        .rounded-tr-lg-0 {
          border-top-right-radius: 0;
        }
  
        .rounded-bl-lg-5 {
          border-bottom-left-radius: 0.5rem;
        }
      }
    </style>
    <div class="card mb-3 container">
     
        <h1 style="text-align: center;text-transform: uppercase;font-family: sans-serif;" class="mb-4 mt-2">Client Register</h1>
        
            
            <!-- form -->
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
              <!-- name and age input -->
              <div class="form-outline mb-4 row  ">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label class="form-label" for="form2Example1">Name</label>
                <input type="text" id="form2Example1" name="name" class="form-control" />
                </div>
                <div class="col-sm-6">
                <label class="form-label" for="form2Example1">Age</label>
              <input type="number" id="form2Example1" name="age" class="form-control" />
              </div>
              </div>

              <!-- email and password input -->
              <div class="form-outline mb-4 row  ">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label class="form-label" for="form2Example1">Email</label>
                <input type="email" id="form2Example1" name="email" class="form-control" />
                </div>
                <div class="col-sm-6">
                <label class="form-label" for="form2Example1">Password</label>
              <input type="password" id="form2Example1" name="password" class="form-control" />
              </div>
              </div>
             
            <!-- phone -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Phone</label>
                <input type="number" id="form2Example2" name="phone" class="form-control" />
              </div>
              <!-- address -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Address</label>
                <textarea type="text" id="form2Example2" name="address" class="form-control"></textarea>
              </div>
              <!-- image -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Image</label>
                  <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
              </div>
  
              <!-- 2 column grid layout for inline styling -->
             
  
              <!-- Submit button -->
              <input type="submit" class="w-100 btn btn-primary mb-3" value="Register" name="submit">

              <a href="login.php"><h5 style="text-align: center;">Already have account</h5></a>
            </form>
  
          
    </div>
  </section>
</div>
  <!-- Section: Design Block -->
</body>
</html>