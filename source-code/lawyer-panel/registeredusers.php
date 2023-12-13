<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">User Registration Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="adduser.php" class="form-group">
              <div>
                <label for="name"> Name </label>
                <input type="text" name="name" class="form-control">
              </div>

              <div>
                <label for="email"> Email </label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="pass"> Password </label>
                  <input type="password" name="pass" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="cpass"> Confirm Password </label>
                  <input type="password" name="cpass" class="form-control">
                </div>
              </div>

              <div>
                <label for="phone"> Phone </label>
                <input type="number" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="adduser" class="btn btn-primary">Add User</button>
            </div>
        </form>

          

    </div>
  </div>
</div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registered Users</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registered users Table</h3>
                <a href="" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddUserModal"> Add User</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  </tbody>
                </table>
              </div>
        </div>
 </div>

<?php
include('includes/footer.php');
?>