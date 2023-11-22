<?php
include ("includes/header.php");
include ("includes/topbar.php");
include ("includes/sidebar.php");
include("../config.php");
// add lawyer php
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $case=$_POST['case'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['Address'];
  $image_name=$_FILES['image']['name'];
  $tmp_image=$_FILES['image']['tmp_name'];
  $image_size=$_FILES['image']['size'];

  move_uploaded_file($tmp_image,'image/'.$image_name);

  $insert="INSERT INTO `lawyer`(`name`,`case`,`email`,`phone`,`address`,`image`) values('$name','$case','$email',$phone,'$address','$image_name')";
  $query=mysqli_query($connection,$insert);
}

?>

<div class="container">
  <?php
// add cases
if (isset($_POST['btncase'])) {
  $case_name=$_POST['addcase'];
  $insert_case="INSERT INTO `cases`(`case_name`) values('$case_name')";
  $run_query=mysqli_query($connection,$insert_case);
}
?>
  <!-- Outer Row -->
  <div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <h2 class="mb-3">Add Cases</h2>
        <div class="form-group">
          <label for="case">Add Case</label>
          <input type="text" id="case" name="addcase" class="form-control mb-3" required>
          <input type="submit" name="btncase" class="w-10 btn btn-success" placeholder="Enter case">
        </div>
    </form>
    </div>
    <div class="col-xl-10 col-lg-12 col-md-9">
      <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        
        <h2 class="mt-4">Add Lawyer</h2>
        <div class="form-group row mb-4">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="name" class="form-label">Lawyer name</label>
            <input type="text" class="form-control form-control-user" id="name" placeholder="Enter lawyer Name"
              name="name" required>
          </div>
          <div class="col-sm-6 mt-4">
            <select class="form-select" name="case" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <?php
   $fetch="SELECT *from`cases` where status='1' ";
  $conn=mysqli_query($connection,$fetch);
  if (mysqli_num_rows($conn)>0) {
    while ($row=mysqli_fetch_assoc($conn)) { 
     echo '<option value="'.$row['id'].'">'.$row['case_name'].'</option>';
      
    }
  }
  ?>

            </select>
          </div>
        </div>
        <div class="form-group row mb-4">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address"
              name="email" required>
          </div>
          <div class="col-sm-6 ">
            <label for="Phone" class="form-label">Phone</label>
            <input type="number" class="form-control form-control-user" id="phone" placeholder="Phone No" name="phone"
              required>
          </div>
        </div>



    </div>
    <div class="mb-3 form-group w-100 row ">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="Address" class="form-label ">Address</label>
        <textarea type="text" class="form-control form-control-user " id="Address" placeholder="Enter Lawyer address"
          name="Address" rows="5" cols="20" required></textarea>
      </div>
      <div class="col-sm-6">
        <label for="formFileMultiple" class="form-label">Enter lawyer picture</label>
        <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
      </div>
    </div>

    <input type="submit" class="btn btn-success btn-user w-75 btn-block mb-5" name="submit">
</form>
  </div>

</div>
<?php
include("includes/footer.php");
?>

</div>

</body>

</html>