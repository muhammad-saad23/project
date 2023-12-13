<?php
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
include("../config.php");

?>

<div class="container d-flex" style="justify-content:space-around;">
<div class="card mb-3 mt-3" style="max-width: 18rem;">
    <h3 style="text-align:center;">Total Lawyers</h3>
    <div class="card-body d-flex" style="justify-content:space-around;align-items:center;">
      <i class="fas fa-user-tie" style="font-size:5rem;"></i>
      <i class="fa-solid fa-arrow-right" style="font-size:3rem;"></i>
      <?php
    $display="SELECT count(*) as lawyercount from `lawyer`";
    $show=mysqli_query($connection,$display);
    if (mysqli_num_rows($show)>0) {
        while ($row=mysqli_fetch_assoc($show)) {
            $lawyerCount=$row['lawyercount'];  
      ?>
    <h5 class="card-title" style="font-size:5rem;"><?php echo $lawyerCount?></h5>
    <?php     
}
}
    ?>
  </div>
</div>
<div class="card mb-3 mt-3" style="max-width: 18rem;">
    <h3 style="text-align:center;">Total Clients</h3>
    <div class="card-body d-flex" style="justify-content:space-around;align-items:center;">
      <i class="fas fa-user" style="font-size:5rem;"></i>
      <i class="fa-solid fa-arrow-right" style="font-size:3rem;"></i>
      <?php
    $display="SELECT count(*) as clientcount from `client_register`";
    $show=mysqli_query($connection,$display);
    if (mysqli_num_rows($show)>0) {
        while ($row=mysqli_fetch_assoc($show)) {
            $clientcount=$row['clientcount'];  
      ?>
    <h5 class="card-title" style="font-size:5rem;"><?php echo $clientcount?></h5>
    <?php     
}
}
    ?>
  </div>
</div>
<div class="card mb-3 mt-3" style="max-width: 18rem;">
    <h3 style="text-align:center;">Total Appoinment</h3>
    <div class="card-body d-flex" style="justify-content:space-around;align-items:center;">
      <i class="fas fa-calendar-check" style="font-size:5rem;"></i>
      <i class="fa-solid fa-arrow-right" style="font-size:3rem;"></i>
      <?php
    $display="SELECT count(*) as appocount from `appoinment`";
    $show=mysqli_query($connection,$display);
    if (mysqli_num_rows($show)>0) {
        while ($row=mysqli_fetch_assoc($show)) {
            $appocount=$row['appocount'];  
      ?>
    <h5 class="card-title" style="font-size:5rem;"><?php echo $appocount?></h5>
    <?php     
}
}
    ?>
  </div>
</div>
</div>
<div class="container d-flex" style="justify-content:space-around;">
<div class="card mb-3 mt-3" style="max-width: 18rem;">
    <h3 style="text-align:center;">Total Services</h3>
    <div class="card-body d-flex" style="justify-content:space-around;align-items:center;">
      <i class="fas fa-gavel" style="font-size:5rem;"></i>
      <i class="fa-solid fa-arrow-right" style="font-size:3rem;"></i>
      <?php
    $display="SELECT count(*) as servicecount from `cases`";
    $show=mysqli_query($connection,$display);
    if (mysqli_num_rows($show)>0) {
        while ($row=mysqli_fetch_assoc($show)) {
            $servicecount=$row['servicecount'];  
      ?>
    <h5 class="card-title" style="font-size:5rem;"><?php echo $servicecount?></h5>
    <?php     
}
}
    ?>
  </div>
</div>
<div class="card mb-3 mt-3" style="max-width: 18rem;">
    <h3 style="text-align:center;">Total Contact</h3>
    <div class="card-body d-flex" style="justify-content:space-around;align-items:center;">
      <i class="fas fa-phone" style="font-size:5rem;"></i>
      <i class="fa-solid fa-arrow-right" style="font-size:3rem;"></i>
      <?php
    $display="SELECT count(*) as viewcontact from `contact`";
    $show=mysqli_query($connection,$display);
    if (mysqli_num_rows($show)>0) {
        while ($row=mysqli_fetch_assoc($show)) {
            $viewcontact=$row['viewcontact'];  
      ?>
    <h5 class="card-title" style="font-size:5rem;"><?php echo $viewcontact?></h5>
    <?php     
}
}
    ?>
  </div>
</div>
</div>


    <?php
    include("includes/footer.php");
    ?>