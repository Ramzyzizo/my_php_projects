<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validation.php';  ?>


    <?php
    if (isset($_POST['submit'])) {
        
        $name                  = $_POST['name'];
        $email                 = $_POST['email'];
        $password              = $_POST['password'];
        $message_error_array   = array();
        $message_success_array = array();

        if (checkEmpty($name)):
            $error_message = "Please Fill The Name.";
            array_push($message_error_array, $error_message);
        endif;
        
        if (checkEmpty($email)) {
            $error_message = "Please Fill The email.";
            array_unshift($message_error_array, $error_message);
        } else {
            if (validemail($email)) { #not email=> true
                $success_message = "Please Fill email correctly.";
                array_unshift($message_error_array, $success_message);
                
            }
        }
        if (checkEmpty($password)){
            $error_message = "Please Fill The password.";
            array_unshift($message_error_array, $error_message);
    }
    else{
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
        }

        if (checkEmpty($message_error_array)):
            // $success_message = "New Admin added correctly.";
            $sql ="INSERT INTO admins(`admin_name`,`admin_email` , `admin_pass`) 
            VALUES ('$name','$email','$password_hash')";
            $success_message= db_insert($sql);
            array_push($message_success_array,$success_message);
            header("refresh:0.5;url=".BURLA."admins");

        endif;
        
        require BL.'functions/messages.php' ;
        
    }
        
        // if (checkEmpty($name) && checkEmpty($email) && checkEmpty($password)) { #empty => false
            
        //     if (validemail($email)) {   #notemail=> false
        //         $success_message = "New Admin added correctly.";
        //         $password_hash = password_hash($password, PASSWORD_DEFAULT);
        //         array_push($message_success_array,$success_message);
        //     } else {
        //         $error_message = "Please Fill email correctly.";
        //         array_push($message_error_array,$error_message);

        //     }
        // }
        //     else{
        //     $error_message = "Please Fill The Form Completely.";
        //     array_push($message_error_array,$error_message);
        //     }

        //     require BL.'functions/messages.php' ;
        // }

        // if(isset($_POST['submit']))
        // {
        //     $name = sanitizeString($_POST['name']);
        //     $password = sanitizeString($_POST['password']);
        //     $email = sanitizeEmail($_POST['email']);
            
          
        //     if(checkEmpty($name) AND checkLess($name,3))
        //     {
        //         if(validEmail($email))
        //         {
        //             if(checkEmpty($password) AND checkLess($password,6))
        //             {
        //                 $check = chekRow('admins','admin_email',$email);
        //                 if(!$check)
        //                 {
        //                     $password = password_hash($password,PASSWORD_DEFAULT);
        //                     $sql = "INSERT INTO admins (`admin_name`,`admin_email`,`admin_password`)
        //                     VALUES ('$name','$email','$password') ";
        //                     $success_message = db_insert($sql);
        //                 }
        //                 else 
        //                 {
        //                     $error_message = "This Email Already Exist";
        //                 }
        //             }
        //             else 
        //             {
        //                 $error_message = "Pleas Type Correct Password - Password Must Be Grater Than 6 Chars";
        //             }

                    
                    
        //         }
        //         else 
        //         {
        //             $error_message = "Please Type Correct Email";
        //         }
                
        //     }
        //     else 
        //     {
        //         $error_message = "Please Type Admin Name";
        //     }

        //     require BL.'functions/error.php';
        // }


    ?>


    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="<?php //echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="text" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>


<?php require BLA.'inc/footer.php';  ?>




   

