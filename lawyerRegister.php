<?php
include("header.php");
include("config.php");




if (isset($_POST['submit'])) {
  $name=mysqli_real_escape_string($connection,$_POST['name']);
  $case=mysqli_real_escape_string($connection,$_POST['case']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);
  $phone=mysqli_real_escape_string($connection,$_POST['phone']);
  $exper=mysqli_real_escape_string($connection,$_POST['experience']);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
    $image_name=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_name'];
    $image_size=$_FILES['image']['size'];
  
    move_uploaded_file($tmp_image,'admin-panel/image/ '.$image_name);
    
    
    
    $Enc_pass=password_hash($password,PASSWORD_BCRYPT);
   

    $query="SELECT *FROM `lawyer` as l inner join `cases` as c on l.case=c.cid where email='$email'";
    $run_query=mysqli_query($connection,$query);
    if (mysqli_num_rows($run_query)>0) {              
      echo "<script> alert('registration already success')</script>";
    }else{
      
      $insert="INSERT INTO `lawyer`(`name`,`case`,`email`,`password`,`phone`,`experience`,`address`,`image`) values('$name','$case','$email','$Enc_pass','$phone','$exper','$address','$image_name')";
      $conn_db = mysqli_query($connection, $insert);
      echo "<script> alert('Registration successfully')</script>";
      header("location:lawyer-panel/index.php");
    }
  }
    
?>

<div class="container">
 
  <!-- Outer Row -->
  <div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9">
    
    </div>
    <div class="col-xl-10 col-lg-12 col-md-9">
      <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        
        <h2 class="mt-4">Lawyer Registration</h2>
        <div class="form-group row mb-4">
          <div class="col-sm-6 mb-3 mb-sm-0 w-100">
            <label for="name" class="form-label">Full name</label>
            <input type="text" class="form-control form-control-user" id="name" placeholder="Enter Full Name"
              name="name" required>
          </div>
          <div class="col-sm-6 mt-4">
            <select class="form-select" name="case" aria-label="Default select example">
              <option >Your Services</option>
              <?php
   $fetch="SELECT *from`cases`";
  $conn=mysqli_query($connection,$fetch);
  if (mysqli_num_rows($conn)>0) {
    while ($row=mysqli_fetch_assoc($conn)) { 
     echo '<option value="'.$row['cid'].'">'.$row['case_name'].'</option>';
      
    }
  }
  ?>

            </select> 
          </div>
        </div>
        
    
    <div class="form-group mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address"
          name="email" required>
    </div>
    <div class="form-group mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control form-control-user" id="password" placeholder="Enter Password"
          name="password" required>
    </div>
    <div class="form-group mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" class="form-control form-control-user" id="phone" placeholder="Enter phone"
          name="phone" required>
    </div>
    <div class="form-group mb-3">
        <label for="experience" class="form-label">Experience</label>
        <input type="number" class="form-control form-control-user" id="experience" placeholder="Enter Experience"
          name="experience" required>
    </div>

    <div class="mb-3 form-group w-100">
        <label for="Address" class="form-label ">Address</label>
        <textarea type="text" class="form-control  form-control-user " id="Address" placeholder="Enter address"
          name="address" rows="5" cols="20" required></textarea>
    </div>
    <div class="form-group w-100">
        <label for="formFileMultiple" class="form-label">Enter picture</label>
     <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>  

    </div>
    
  <input type="submit"  href="profile.php?id=<?php echo $row['id']?>"  class="btn btn-success btn-user w-100 btn-block mb-1" name="submit">
</form>
</div>
<a href="lawyerlogin.php" style="color:#3366ff;text-decoration:underline;font-weight:700;" class="mx-auto mb-3">Already have you registrated</a>

</div>


</div>

</body>

</html>
<?php
include("footer.php");
?>
