<?php require '../../config.php';?>
<?php require BLA . 'inc/header.php';?>
<?php require BL . 'functions/validation.php';?>
<?php
if (isset($_POST['submit'])) {
    $message_error_array = [];
    $message_success_array = [];
    $name = $_POST['name'];
    if (!checkEmpty($name) && checkless($name, 3)) {
        $sql = "INSERT INTO cites(`city_name`)  VALUES ('$name')";
        $success_message = db_insert($sql);
        array_unshift($message_success_array, $name . ", " . $success_message);
        header("refresh:0.5;url=".BURLA."cities/add.php");
    } else {
        $error_name = "Please fill name right";
        array_unshift($message_error_array, $error_name);
    }
    require BL . 'functions/messages.php';
}
if (isset($_POST['view_all'])) {
    header("location:" . BURLA . "cities");
}
?>
    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <form method="post" action="">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" >
            </div>

            <button type="submit" name="submit" class="btn btn-success">Save</button>
            <button type="submit" name="view_all" class="btn  btn-outline-success  position-relative float-right">View all</button>
        </form>
    </div>
<?php require BLA . 'inc/footer.php';?>