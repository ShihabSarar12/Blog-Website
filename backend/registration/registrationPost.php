<?php
    session_start();
    require '../database/db.php';


    //sign_up_Information1 start
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Password Validation Start
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $confirm_password = $_POST['confirm_password'];
    // Password Validation End

//     echo $name;
//     echo $email;
//     echo $password;
// die();

    $errors = [];
    $field_names = ['name'=>'Name Required','email'=>'Email Required','password'=>'Password Required','confirm_password'=>'Confirm Password Required'];

    foreach($field_names as $field_name=>$message){
        if(empty($_POST[$field_name])){
            $errors[$field_name] = $message;
        }
    }
    if(count($errors) == 0){
        // Name Validation
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $_SESSION['name_error'] = 'Only letters and white space allowed';
            header('location:http://localhost/SD_Project/backend/registration/registration.php');
        }
        // Email Validation
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['invalid_email'] = 'Invalid email format';
            header('location:http://localhost/SD_Project/backend/registration/registration.php');
        }
        // Password Validation
        else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $_SESSION['pass_not_valid'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            header('location:http://localhost/SD_Project/backend/registration/registration.php');
        }
        else if($password != $confirm_password){
            $_SESSION['pass_not_match'] = 'Password and Confirm Password does not match';
            header('location:http://localhost/SD_Project/backend/registration/registration.php');
        }
        
        else{
            $upload_photo = $_FILES['profile_photo'];
            $after_explode = explode('.', $upload_photo['name']);
            $extension_name = end($after_explode);
            $allowed_extension = array('jpg', 'png', 'webp', 'jpeg', 'gif');

            if(in_array($extension_name,$allowed_extension)){
                if($upload_photo['size'] <= 10000000){

                    #insert code
                    $insert_query = "INSERT INTO users(name, email, password) VALUES ('$name','$email','$password_hash')";
                    $insert_result = mysqli_query($db_connect, $insert_query);
                    #insert code

                    $id = mysqli_insert_id($db_connect);
                    $file_name = $id.'.'.$extension_name;
                    $new_location = '../../uploads/user/'.$file_name;

                    move_uploaded_file($upload_photo['tmp_name'],$new_location);

                    $update = "UPDATE users SET profile_photo='$file_name' WHERE id=$id";
                    $update_result = mysqli_query($db_connect,$update);

                    $_SESSION['complete'] = 'Registration Successfully Completed!';
                    header('location:http://localhost/SD_Project/backend/login/login.php');
                }
                else{
                    $_SESSION['size'] = "File size must be 1mb";
                    header('location:http://localhost/SD_Project/backend/registration/registration.php');
                }
            }
            else{
                $_SESSION['extension'] = "Invalid Extension";
                header('location:http://localhost/SD_Project/backend/registration/registration.php');
            }
        }
    }
    else{
        $_SESSION['errors'] = $errors;
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        header('location:http://localhost/SD_Project/backend/registration/registration.php');
    }
?> 