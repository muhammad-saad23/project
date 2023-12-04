<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include("../config.php");

$client_id=$_GET['id'];
$select_client="SELECT*from `client_register` where id='$client_id'";
$run_query=mysqli_query($connection,$select_client);

if (mysqli_num_rows($run_query)>0) {
    while ($data=mysqli_fetch_assoc($run_query)) {
        
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
</head>
<body>
    <h1 class="mt-3 ms-3">Update Data</h1>
    <div class="container mt-5">
        
    <form action="updateclient_data.php" method="POST" class="form-group" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
    <label for="name">Name</label>
    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $data['id']?>">
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $data['name']?>">
    
    </div>
    </div>
    <br>
    <label for="age">age</label>
    <input type="number" class="form-control" name="age" id="age" required value="<?php echo $data['age']?>">
    <br>
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" required value="<?php echo $data['email']?>">
    <br>
    <label for="phone">Phone</label>
    <input type="number" class="form-control" name="phone" id="phone" required value="<?php echo $data['phone']?>">
    <br>
    <label for="address">Address</label>
    <textarea type="text" class="form-control form-control-user " id="Address" placeholder="Enter  address"
          name="address" rows="5" cols="20" required value="<?php echo $data['address']?>"></textarea>
    <br>
    
    <input type="submit" class="w-100 btn btn-success" name="update">
    
    </form>
    
    </div>

    <?php
}
}

include("includes/footer.php");
?>
</body>
</html>