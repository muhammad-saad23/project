<?php
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
include("../config.php");



// view lawyer
$select="SELECT *FROM `appoinment` as a inner join `cases` as c on a.case=c.cid";
$query=mysqli_query($connection,$select);

if (mysqli_num_rows($query)>0) {
    # code...


?>

<div class="container mt-5">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
       
        
    <table id="example" class="table table-striped" style="width:100%">
        <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Case</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            </tr>

        </thead>
        <tbody>
            <?php
            while ($data=mysqli_fetch_assoc($query)) {
                
            
            ?>
            <tr>
            <th scope="row"><?php echo $data['id']?></th>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['case']?></td>
            <td><?php echo $data['date']?></td>
            <td><?php echo $data['time']?></td>
             
            
            
        </tr>
       <?php
}
}
            ?>
      
        </tbody>
    </table>

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