<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include("../config.php");

$select_app="SELECT *FROM `appoinment` as a inner join `cases` as c on a.case=c.cid";
$view=mysqli_query($connection,$select_app);

if (mysqli_num_rows($view)>0) {
    


?>

<div class="container-fluid mt-5">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
       
        
    <table id="example" class="table table-striped" style="width:100%">
        <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Case</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            </tr>

        </thead>
        <tbody>
            <?php
            while ($data=mysqli_fetch_assoc($view)) {
                
            
            ?>
            <tr>
            <th scope="row"><?php echo $data['id']?></th>
            <th scope="row"><?php echo $data['name']?></th>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['date']?></td>
            <td><?php echo $data['time']?></td>
            <td><?php echo $data['case_name']?></td>
            <!-- <td><img src="" alt=""></td> -->
            
            <!-- <td ><a href="" class="btn btn-primary">Profile</a></td> -->
            <td ><a href="" class="btn btn-success">Update</a></td>
            <td ><a href=""  class="btn btn-danger">Delete</a></td>
            
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