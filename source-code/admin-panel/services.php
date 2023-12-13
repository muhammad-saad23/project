<?php
include ("includes/header.php");
include ("includes/topbar.php");
include ("includes/sidebar.php");
include("../config.php");

// add cases
if (isset($_POST['btncase'])) {
    $case_name=$_POST['addcase'];
    $insert_case="INSERT INTO `cases`(`case_name`) values('$case_name')";
    $run_query=mysqli_query($connection,$insert_case);
}


?>


<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <h2 class="mb-3">Add Cases</h2>
        <div class="form-group">
          <label for="case">Add Case</label>
          <input type="text" id="case" name="addcase" class="form-control mb-3" required>
          <input type="submit" name="btncase" class="w-10 btn btn-success" placeholder="Enter case">
        </div>
    </form>
    </div>
    
  </div>

  <?php
  // show services
  $service="SELECT*FROM `cases`";
  $run=mysqli_query($connection,$service);
  if (mysqli_num_rows($run)>0) {
    
  ?>
  
  <table id="example" class="table table-striped" style="width:100%">
        <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Services_name</th>
            <!-- <th scope="col">Delete</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
                while ($data=mysqli_fetch_assoc($run)){
            ?>
            <tr>
            <th scope="row"><?php echo $data['cid']?></th>
            <td><?php echo $data['case_name']?></td>      
            
        </tr>
       <?php
}
}
            ?>
      
        </tbody>
    </table>

    <?php
//     $pagination="SELECT *FROM `lawyer`";
//     $run=mysqli_query($connection,$pagination);

//     if (mysqli_num_rows($run)>0) {
//         $total_record=mysqli_num_rows($run);
//         $total_page=ceil($total_record / $limit);

//         echo '<ul class="pagination">';
//         if ($pgno > 1) {
            
//             echo '<li class="page-item"><a class="page-link" href="viewlawyer.php?pgno='.($pgno - 1).'">Previous</a></li>';
//         }
    
    
//     for ($i=1; $i < $total_page ; $i++) { 
//         echo '<li class="page-item"><a class="page-link" href="viewlawyer.php?pgno='.$i.'">'.$i.'</a></li>';
        
//     }
    
//     if ($pgno < $total_page) {
//         echo '<li class="page-item"><a class="page-link" href="viewlawyer.php?pgno='.($pgno + 1).'">Next</a></li>';
//     }
//     echo '</ul>';

// }
    ?>
   

    </div>

</div>

</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>new DataTable('#example');</script>
<?php
include("includes/footer.php");
?>
</body>
</html>
