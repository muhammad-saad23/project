<?php
include("header.php");
include("config.php");

if (isset($_POST['submit'])) {
    $con_name=$_POST['name'];
    $con_email=$_POST['email'];
    $con_phone=$_POST['phone'];
    $con_message=$_POST['message'];

    $contact="INSERT INTO `contact`(`name`,`email`,`phone`,`message`) values('$con_name','$con_email','$con_phone','$con_message')";
    $run=mysqli_query($connection,$contact);

    if ($run) {
        echo "<script>alert('Submitted')</script>";
    }
}

?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Contact Us</h6>
                <h1 class="mb-4">Contact For Any Query</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form">
                       
            <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" name="name" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" name="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="number" name="phone" class="form-control p-4" id="subject" placeholder="Phone No" required="required" data-validation-required-message="Please enter a subject" />
                                
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" name="message" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                             
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary w-100 text-light" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe style="width: 100%; height: 100%; object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php
    include("footer.php")
    ?>
</body>

</html>