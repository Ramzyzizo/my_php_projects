<?php  require 'config.php';  ?>
<?php require BL.'functions/validation.php';  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >
    <title>Home Page</title>
  </head>
  <body>
   
    <div class="cont-main" style=" background:url(<?php echo ASSETS .'images/back.webp';?>);background-size: 100% 100%;
                                    background-attachment: fixed; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                <?php 
                if (isset($_POST['submit'])) 
                {
                    $service = $_POST['service'];
                    $city = $_POST['city'];
                    $mobile = $_POST['mobile'];
                    $notes = addslashes($_POST['notes']) ;
                    $name =  addslashes($_POST['name']);
                    $email = addslashes($_POST['email']);
                    $message_error_array=array();
                    $message_success_array=array();
                    
                    if (!checkEmpty($mobile) && !checkEmpty($name)) 
                    {
                        $sql  = "INSERT INTO orders (`order_name`,`order_email`,`order_mobile`,`order_serv_id`,`order_city_id`,`order_notes`)
                                VALUES ('$name','$email','$mobile','$service','$city','$notes')";
                        $success_message = db_insert($sql);
                        array_push($message_success_array, $success_message);
                    }
                    else 
                    {
                        $error_message = "Please Type Your Name And Your Mobile Correctly.";
                        array_push($message_error_array, $error_message);
                    }
                    require BL."functions/messages.php";
                    header("refresh:1.5");
                }
                ?>
                <form class="row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mt-5" >
                
   
<!-- services -->
                    <div class="col-sm-6 ">
                        <div class="form-group mt-3">
                            <label for="serv" class="font-1">Choose Service</label>
                            <select name="service" id="serv" class="form-control font-1" required>
                                <option value="" disabled selected hidden>Choose a service</option>
                                <?php $data = getRows('services');  $x=1; ?>

                                <?php foreach($data as $row){   ?>
                                <option value="<?php echo $row['serv_id']; ?>"> <?php echo $row['serv_name']; ?> </option>
                                <?php } ?> 
                            </select>
                            
                        </div>
                    </div>

<!-- city -->
                    <div class="col-sm-6 ">
                        <div class="form-group mt-3">
                            <label for="serv" class="font-1">Choose City</label>
                            <select name="city" id="serv" class="form-control font-1" required>
                            <option value="" disabled selected hidden>Choose City</option>
                                <?php $dataCity = getRows('cites');  $x=1; ?>
                                <?php foreach($dataCity as $row){   ?>
                                <option value="<?php echo $row['city_id']; ?>"> <?php echo $row['city_name']; ?> </option>
                                <?php } ?> 
                            </select>
                            
                        </div>
                    </div>

<!-- name -->
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">

                            <label for="serv" class="font-1" >Type Your Name *</label>
                            <input type="text" name="name" placeholder="Your name" class="form-control font-1 bg-base">
                            
                        </div>
                    </div>
<!-- email -->
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group ">

                            <label for="serv" class="font-1">Type Your Email</label>
                            <input type="email" name="email" placeholder="Your Email" class="form-control font-1 bg-base">
                            
                        </div>
                    </div>
<!-- mobile -->
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group ">

                            <label for="serv" class="font-1">Type Your Mobile *</label>
                            <input type="text" name="mobile" placeholder="Your Mobile" class="form-control font-1 bg-base">
                            
                        </div>
                    </div>
                    
<!-- Note -->
                    <div class="col-sm-12">
                        <div class="form-group">

                            <label for="serv" class="font-1">Type Notes</label>
                            <textarea name="notes"  class="form-control font-1 bg-base"  placeholder="Your Notes" rows="5"></textarea>
                            
                        </div>
                    </div>

<!-- submit -->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success form-control">Send</button>
                            <a href="<?php echo BURLA?>" type="button"class="form-control btn btn-secondary" >admin</a>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>
  </body>
</html>
