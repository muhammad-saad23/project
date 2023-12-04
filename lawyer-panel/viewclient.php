<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include("../config.php");

$client="SELECT * FROM `client_register`";
$conn_client=mysqli_query($connection,$client);

if (mysqli_num_rows($conn_client)>0) {
    




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
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            </tr>

        </thead>
        <tbody>
            <?php
            while ($data=mysqli_fetch_assoc($conn_client)) {
                
            
            ?>
            
            <th scope="row"><?php echo $data['id']?></th>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['age']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['phone']?></td>
            <td><?php echo $data['address']?></td>
            
            
            
            <td ><a href="updateclient.php?id=<?php echo $data['id']?>" class="btn btn-success">Update</a></td>
            <td ><a href="clientdelete.php?id=<?php echo $data['id']?>"  class="btn btn-danger">Delete</a></td>
            
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