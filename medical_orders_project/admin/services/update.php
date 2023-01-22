<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validation.php';  ?>
<?php
        if(isset($_POST['submit']))
        {
            $serv_id = $_POST['serv_id'];
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $Empty = checkEmpty($name);
            $message_error_array=[];
            $message_success_array=[];
            if(!$Empty)
            {
                $less = checkLess($name,3);
                if($less)
                {
                    $sql = "UPDATE services SET `serv_name`='$name' WHERE `serv_id`='$serv_id' ";
                    $success_message = db_update($sql);
                    array_unshift($message_success_array,$name.", ".$success_message);
                    header( "refresh:0.5;url=".BURLA."services");
                }
                else 
                {
                    $error_message = "Please Type Correct Service";
                    array_unshift($message_error_array, $error_message );
                    header("refresh:0.5; url=edit.php?id=$serv_id");
                }
            }
            else 
            {
                $error_message = "Please Type Service Name";
                array_unshift($message_error_array, $error_message );
                header( "refresh:0.5; url=edit.php?id=$serv_id");
            }

            require BL.'functions/messages.php';
        }


    ?>





<?php require BLA.'inc/footer.php';  ?>




   

