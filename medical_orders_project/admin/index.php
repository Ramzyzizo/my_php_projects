<?php
require '../config.php';  
//require '../functions/validation.php';  
require_once(BLA.'inc/header.php');
// echo $_SESSION['admin_name'];

?>

<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All  Services</h5>
        <p class="card-text">Number of our services Now.</p>
        <a href="<?php echo BURLA.'services/'?>" class="btn btn-primary"><?php echo count_table('services'); ?></a>
      </div>
    </div>
</div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Cities</h5>
        <p class="card-text">We have a huge cloud of services in different cities.</p>
        <a href="<?php echo BURLA.'cities/' ?>" class="btn btn-primary"><?php echo count_table('cites'); ?></a>
      </div>
    </div>
  </div>

<div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Orders</h5>
        <p class="card-text">These Orders mean alot for US.</p>
        <a href="<?php echo BURLA.'orders/index.php?all=1'  ?>" all-alert ='0'class="btn btn-primary"><?php echo count_table('orders'); ?></a>
      </div>
    </div>
  </div>

<div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Orders This Day</h5>
        <p class="card-text">Today is our day to serve these orders.</p>
        <a href="<?php echo BURLA.'orders/index.php?all=0' ?>" class="btn btn-primary"><?php echo count_table_today('orders'); ?></a>
      </div>
    </div>
  </div>
<?php require BLA.'/inc/footer.php';  ?>


    