<?php
include ("includes/header.php");
include ("includes/topbar.php");
include ("includes/sidebar.php");
include("../config.php");

$law_id=$_GET['id'];

$query="SELECT*FROM `lawyer` as l inner join `cases` as c on l.case=c.cid where l.id='$law_id'";
$result=mysqli_query($connection,$query);

if (mysqli_num_rows($result)>0) {
  while ($data=mysqli_fetch_assoc($result)) {
    
  
?>
    <h1 class="mt-3 ms-3">Update Data</h1>
    <div class="container ">
        
    <form action="updatelawyer.php" method="POST" class="form-group" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
    <label for="name">Name</label>
    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $data['id']?>">
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $data['name']?>">
    <div class="col-sm-6">
    <select class="form-select" name="case" value="<?php echo $data['case']?>" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <?php
   $fetch="SELECT *from`cases` where status='1' ";
  $conn=mysqli_query($connection,$fetch);
  if (mysqli_num_rows($conn)>0) {
    while ($row=mysqli_fetch_assoc($conn)) { 
     echo '<option value="'.$row['cid'].'">'.$row['case_name'].'</option>';
      
    }}
  ?>

            </select>
   
    </div>
    </div>
    </div>
    <br>
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" required value="<?php echo $data['email']?>">
    <br>
    <label for="phone">Phone</label>
    <input type="number" class="form-control" name="phone" id="phone" required value="<?php echo $data['phone']?>">
    <br>
    <label for="exper">Experience</label>
    <input type="number" class="form-control" name="experience" id="exper" required value="<?php echo $data['experience']?>">
    <br>
    <label for="address">Address</label>
    <textarea type="text" class="form-control form-control-user " id="Address" placeholder="Enter Lawyer address"
          name="address" rows="5" cols="20" required value="<?php echo $data['address']?>"></textarea>
    <br>
    <label for="image">Image</label>
    <input type="file" class="form-control" name="image" id="image" value="<?php echo 'image/'. $data['image']?>" >
    <br>
    <input type="submit" class="w-100 btn btn-success" name="update">
    
    </form>
    
    </div>

    <?php
 }
} 

?>
</body>
</html>
<?php
include("includes/footer.php");
?>