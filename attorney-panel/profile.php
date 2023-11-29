<head>
    <link rel="stylesheet" href="css/profile.css">
</head>
<?php
include("../config.php");
include('class/User.php');



include('inc/header4.php');
?>
</head>
<body>
	
<div class="container-fluid">
	<?php include('top_menus.php'); ?>
	<div class="row row-offcanvas row-offcanvas-left">
		<?php include('left_menus.php'); ?>
			
            

<div class="col-md-9 col-lg-10 main">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
            <div class="col-xl-8">

            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Specialization</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your Specialization" >
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">City</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your City">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Age</label>
                                    <input class="form-control" id="inputBirthday" type="number" name="birthday" placeholder="Enter your Age">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="button">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>