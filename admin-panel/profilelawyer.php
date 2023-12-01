<?php
include ("includes/header.php");
include ("includes/topbar.php");
include ("includes/sidebar.php");
include("../config.php");

// profile
$law_id=$_GET['id'];

$profile="SELECT * FROM `lawyer` as l inner join `cases` as c on l.case=c.cid where id='$law_id'";
$run_query=mysqli_query($connection,$profile);

if (mysqli_num_rows($run_query)>0) {
  while ($row=mysqli_fetch_assoc($run_query)) {
    
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container mt-5 ">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          <img src="<?php echo 'image/'.$row['image']?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;height:150px">
            <h5 class="my-3"><?php echo $row['name']?></h5>
            <p class="text-muted mb-1"><?php echo $row['case_name']?></p>
            <p class="text-muted mb-4"><?php echo $row['address']?></p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Edit profile</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
          
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['name']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Case</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['case_name']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['email']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['phone']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Experience</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['experience'] ?>Years</p>
              </div>
            </div>
            <hr>
            
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['address']?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
<?php
 }
}
?>
      
</body>

</html>

<?php

include("includes/footer.php");
?>