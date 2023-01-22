<?php if(isset($message_error_array) &&!empty($message_error_array)){ ?>
    <?php foreach($message_error_array as $error){ ?>
        <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="alert alert-danger text-center"> <?php echo $error?></h3>
        </div>
<?php }};?>
<?php if(isset($message_success_array) &&!empty($message_success_array)){ ?>
    <?php foreach($message_success_array as $success) ?>
        <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="alert alert-success text-center"> <?php echo $success?></h3>
        </div>
<?php };?>