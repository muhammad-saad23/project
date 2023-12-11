<?php
// session_start();
include("header.php");
include("config.php");
// if (isset($_SESSION['clientemail'])) {
//     header("location:login.php");
// }

if (isset($_POST['submit'])) {  
    $app_name=$_POST['name'];
    $app_email=$_POST['email'];
    $app_date=$_POST['date'];
    $app_time=$_POST['time'];
    $app_case=$_POST['case'];
    
    $appoinment="INSERT INTO `appoinment`(`name`,`email`,`case`,`date`,`time`) values('$app_name','$app_email',$app_case,'$app_date','$app_time')";
    $run=mysqli_query($connection,$appoinment);
    
    if ($run) {
        echo "<script>alert('Appoinment Booked')
        window.location.href='index.php'
        </script>";
    }

    
}

?>

    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Get An Appointment</h1>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" name="date" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" name="time" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" name="case" style="height: 47px;">
                                    <option selected>Services</option>
              <?php
   $fetch="SELECT *from`cases`";
  $conn=mysqli_query($connection,$fetch);
  if (mysqli_num_rows($conn)>0) {
    while ($row=mysqli_fetch_assoc($conn)) { 
     echo '<option value="'.$row['cid'].'">'.$row['case_name'].'</option>';
      
    }}
  ?>
                                    </select>
                                </div>
                                <div>
                                    <input class="btn btn-primary btn-block border-0 py-3" name="submit" value="Get An Appoinment" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


</body>
</html>
<?php
include("footer.php");
?>


