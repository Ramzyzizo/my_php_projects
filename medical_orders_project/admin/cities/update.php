<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validation.php';  ?>
<?php 
    if(isset($_POST['submit'])){
        $message_error_array=[];
        $message_success_array=[];
        $name = $_POST['name'];
        $city_id = $_POST['city_id'];
        if (!checkEmpty($name) && checkless($name,3)){
            $row = getRow('cites','city_id',$city_id);
            if ($row) {
                $sql ="UPDATE cites SET`city_name`= '$name' WHERE `city_id` ='$city_id'"; 
                $success_message= db_update($sql);
                array_unshift($message_success_array,$name.", ".$success_message);
                header("refresh:0.5;url=".BURLA."cities");

            }   
            else{
                $error_name = "Please correct your id";
                array_unshift($message_error_array, $error_name );
            }
        }
        else{
            $error_name = "Please fill name right";
            array_unshift($message_error_array, $error_name );
        }
        require BL . 'functions/messages.php';
    }
?>
<?php require BLA.'inc/footer.php';  ?>
