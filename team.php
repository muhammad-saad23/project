<?php
include("header.php");
include("config.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}



.card-img-top{
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin: auto;
    
}
.card{
    box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    border-radius: 0;
    padding: 20px;
    border: none;
}
.bi{
    font-size: 25px;
    color: rgb(255, 85, 0);
    
}

.bi:hover{
    cursor: pointer;
    color: black;
}
    </style>
</head>
<body>
    

    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 50px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Attorney</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Attorney</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    
    <!-- Team Start -->


    <div class="">
        
            <div class="text-center ">
                <h6 class="text-uppercase">Our Attorneys</h6>
                <h1 class="mb-2">Meet Our Attorneys</h>

    
        <h2 class="text-white">Our Team</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-5 ">
  <div class="col">
    <div class="card">
      <img src="./img/team-1.jpg" class="img-thumbnail"  alt="...">
      <div class="card-body">
        <h3 class="card-title">John Doe</h3>
        <p class="text-muted">Lawyer</p>
      </div>
      <input type="button" value="Veiw Profile" class="btn btn-primary w-75 mx-auto mb-3">
    </div>
  </div>


  <div class="col">
    <div class="card">
      <img src="./img/team-2.jpg" class="img-thumbnail" alt="...">
      <div class="card-body">
        <h3 class="card-title">John Doe</h3>
        <p class="text-muted">Lawyer</p>
      </div>
      <input type="button" value="Veiw Profile" class="btn btn-primary w-75 mx-auto mb-3">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/team-3.jpg" class="img-thumbnail" alt="...">
      <div class="card-body">
        <h3 class="card-title">John Doe</h3>
        <p class="text-muted">Lawyer</p>
      </div>
      <input type="button" value="Veiw Profile" class="btn btn-primary w-75 mx-auto mb-3">
    </div>
  </div>
  </div>

  
  <div class="row row-cols-1 row-cols-md-3 g-4 py-5 mb-4">
  <div class="col">
    <div class="card">
      <img src="./img/team-4.jpg" class="img-thumbnail" alt="...">
      <div class="card-body">
        <h3 class="card-title">John Doe</h3>
        <p class="text-muted">Lawyer</p>
      </div>
      <input type="button" value="Veiw Profile" class="btn btn-primary w-75 mx-auto mb-3">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/team-5.jpg" class="img-thumbnail" alt="...">
      <div class="card-body">
        <h3 class="card-title">John Doe</h3>
        <p class="text-muted">Lawyer</p>
      </div>
      <input type="button" value="Veiw Profile" class="btn btn-primary w-75 mx-auto mb-3">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/lawyer-6.jpg" class="img-thumbnail" alt="...">
      <div class="card-body">
        <h3 class="card-title">John Doe</h3>
        <p class="text-muted">Lawyer</p>
      </div>
      <input type="button" value="Veiw Profile" class="btn btn-primary w-75 mx-auto mb-3">
    </div>
  </div>
</div>
    </div>

    <!-- Team End -->


    


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase">Our Features</h6>
                        <h1 class="mb-4">Why Choose Us</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Best Law Practices</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Efficiency & Trust</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Results You Deserve</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


   
    </body>
</html>
<?php
include("footer.php"); 

?>