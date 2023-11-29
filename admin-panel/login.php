<?php
include("../config.php");

session_start();
if (isset($_SESSION["useremail"])) {
    header("location:index.php");
}


if (isset($_POST['submit'])) {
    $log_email=$_POST['login_email'];
    $log_password=$_POST['login_password'];

    $login="SELECT*from `register` where email='$log_email'";
    $conn_db=mysqli_query($connection,$login);

    if ($conn_db) {
        if (mysqli_num_rows($conn_db)>0) {
            $data=mysqli_fetch_assoc($conn_db);

            $db_password=$data['password'];
            $pass_verify=password_verify($log_password,$db_password);

            if ($pass_verify) {
                
                $_SESSION['useremail'] =$data['email'];
                echo "<script> alert('login successfully')
                        window.location.href='index.php';
                       </script>";
              }else{
                echo "<script> alert(login unsuccessfully)</script>";
              }
            }else{
              echo "<script>alert(invailed password)</script>";
            }
          }else{
            echo "(query failed)";
          }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body  style="background-color:#355a6e;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="login_email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="login_password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                              <input type="submit" name="submit" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
