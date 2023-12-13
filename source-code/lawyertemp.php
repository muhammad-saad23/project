<?php
include("header.php");
include("config.php");

$id=$_GET['id'];
$fetch_data="SELECT*FROM `lawyer` as l inner join `cases` as c on l.case=c.cid where id='$id'";
$run=mysqli_query($connection,$fetch_data);
if (mysqli_num_rows($run)) {
   
        

?>


<!-- Header2 Start -->
<?php
             while ($data=mysqli_fetch_assoc($run)) {
            ?>
<div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="<?php echo 'admin-panel/image/'. $data['image']?>" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;"><?php echo $data['name']?></h1>
                    <h1 class="text-white font-weight-normal mb-3"><?php echo $data['case_name']?></h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Lawyer</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header2 End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="<?php echo 'admin-panel/image/'. $data['image']?>" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Lawyer</h3>
                    <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum. Amet dolor stet lorem diam dolor justo et dolor dolor dolor</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary"><?php echo $data['name']?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Specialization: <span class="text-secondary"><?php echo $data['case_name']?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">LLB</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary"><?php echo $data['experience']?> Years</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary"><?php echo $data['phone']?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary"><?php echo $data['email']?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary"><?php echo $data['address']?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Lawyer: <span class="text-secondary">Available</span></h6></div>
                    </div>
                    <a href="appoinment.php?id=<?php echo $data['id']?>" class="btn btn-outline-primary">Book Appoinment</a>
                    <a href="https://wa.me/03152458881" class="btn text-light" style="background-color:#228b22;">Message</a>
                </div>
            </div>
            <?php
             }
            }
            ?>
        </div>
    </div>
    <!-- About End -->


    
    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h4 class="font-weight-bold m-0">Criminal Case</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h4 class="font-weight-bold m-0">Murdere Case</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h4 class="font-weight-bold m-0">Robbery Case</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h4 class="font-weight-bold m-0">Divorce Case</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h4 class="font-weight-bold m-0">Harrasment Case</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h4 class="font-weight-bold m-0">Theft Case</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
   
     <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Let's get started. Call us now for a Free Consultation</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="contact.php">Call Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Testimonial</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <?php
    include("footer.php");
    ?>


   