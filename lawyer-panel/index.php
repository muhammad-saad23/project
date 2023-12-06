<?php
session_start();
if (!isset($_SESSION['useremail'])) {
    header("location:../lawyerlogin.php");
}

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include("../config.php");


$lawyer_id=$_SESSION['id'];
$profile="SELECT*FROM `lawyer` as l inner join `cases` as c on l.case=c.cid where id='$lawyer_id'";
$query=mysqli_query($connection,$profile);

if (mysqli_num_rows($query)>0) {
  while ($data=mysqli_fetch_assoc($query)) {
    $_SESSION['id']=$data['id'];
    
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
  <section >
  <div class="container mt-5 ">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 ">
          <div class="card-body text-center">
          <img src="<?php echo '../admin-panel/image/' .$data['image']?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;height:150px">
            <h5 class="my-3"></h5>
            <p class="text-muted mb-1"><?php echo $data['name']?></p>
            <p class="text-muted mb-4"><?php echo $data['case_name']?></p>
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
                <p class="text-muted mb-0"><?php echo $data['name']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Case</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $data['case_name']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $data['email']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $data['phone']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Experience</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $data['experience']?> years</p>
              </div>
            </div>
            <hr>
            
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $data['address']?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      </section>
<?php
 }
}
?>
      
</body>

</html>

<?php
include('includes/footer.php');
?>