<?php
include("header.php");
include("config.php");



if (isset($_POST['submit'])) {
    // $app_id=$_POST['id'];
    $app_name=$_POST['name'];
    $app_email=$_POST['email'];
    $app_date=$_POST['date'];
    $app_time=$_POST['time'];
    $app_case=$_POST['case'];
    
    $appoinment="INSERT INTO `appoinment`(`name`,`email`,`date`,`time`,`case`) values('$app_name','$app_email','$app_date','$app_time','$app_case')";
    $run=mysqli_query($connection,$appoinment);

    if ($run) {
        echo "<script>alert('Appoinment Booked')</script>";
    }

    
}

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
                                                <input type="date" name="date" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
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
                                    <select class="custom-select border-0 px-4 mb-3" name="case" style="height: 47px;">
                                    <?php
                                    
                                    $id=$_GET['id'];
                                    $select="SELECT * from `lawyer` as l inner join `cases` as c on l.case=c.cid where id='$id'";
                                    $res=mysqli_query($connection,$select);
                                    
                                    if (mysqli_num_rows($res)>0) {
                                        while ($row=mysqli_fetch_assoc($res)) {
                                        
                                       
                                            echo '<option value="'.$row['cid'].'">'.$row['case_name'].'</option>';                    
                                            
                                        
                                    } 
                                }
                                    ?>
                                    <?php
                                   
                                    ?>
                                    
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
<?php
include("footer.php");
?>
</html>


