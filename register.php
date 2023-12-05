<?php

include("header.php");
include("config.php");

// client register
// registration work

// Bycrpty password
if (isset($_POST['submit'])) {
  $name=mysqli_real_escape_string($connection,$_POST['name']);
  $age=mysqli_real_escape_string($connection,$_POST['age']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);
  $phone=mysqli_real_escape_string($connection,$_POST['phone']);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
 

 

  $Enc_pass=password_hash($password,PASSWORD_BCRYPT);

  $query="SELECT *FROM `client_register` where email='$email'";
  $run_query=mysqli_query($connection,$query);
  if (mysqli_num_rows($run_query)>0) {              
    echo "email already exists";
  }else{
    $insert = "INSERT INTO `client_register`(`name`,`age`,`email`,`password`,`phone`,`address`)VALUES ('$name','$age','$email','$Enc_pass','$phone','$address')";
    $conn_db = mysqli_query($connection, $insert);
    echo "<script>alert('register successfully')            
    </script>";
    header("location:index.php");
  }

  
  
}
?>



    <style>
        /* .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
} */

body{
        background-image:url("img/login.jpg");
        background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
            }
     

/* @media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
} */

    </style>
      
  <!-- Section: Design Block -->
  <div class="container mt-5">

    
    <div class="card mb-3 container">
     
        <h1 style="text-align: center;text-transform: uppercase;font-family: sans-serif;" class="mb-4 mt-2">Client Register</h1>
        
            
            <!-- form -->
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
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
              <!-- <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Image</label>
                  <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
              </div>
   -->
              <!-- 2 column grid layout for inline styling -->
             
  
              <!-- Submit button -->
              <input type="submit" class="w-100 btn btn-success  text-dark mb-3" value="Register" name="submit">

              <a href="login.php"><h5 style="text-align: center;">If You already registarted</h5></a>
            </form>
  
          
    </div>
  
</div>
  <!-- Section: Design Block -->
</body>
</html>