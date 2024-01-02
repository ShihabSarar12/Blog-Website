<?php 
session_start();
require '../database/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$select_email = "SELECT COUNT(*) as email_exist FROM users WHERE email='$email'";
$select_email_result = mysqli_query($db_connect, $select_email);
$after_assoc_email = mysqli_fetch_assoc($select_email_result);


if($after_assoc_email['email_exist'] == 1){
    $select_password = "SELECT * FROM users WHERE email='$email'";
    $select_password_result = mysqli_query($db_connect, $select_password);
    $after_assoc_password = mysqli_fetch_assoc($select_password_result);

    if(password_verify($password, $after_assoc_password['password'])){
        $_SESSION['login_done'] = 'login done';
        $_SESSION['login_alert'] = 'login_alert';
        $_SESSION['name'] = $after_assoc_password['name'];
        $_SESSION['email'] = $after_assoc_password['email'];
        $_SESSION['photo'] = $after_assoc_password['profile_photo'];
        header("Location: http://localhost/SD_Project/backend/dashboard/dashboard.php");
    }
    else{
        $_SESSION['password'] = 'Wrong Password';
        header('location:login.php');
    }
}
else{
    $_SESSION['email'] = 'Email Does Not Exist';
    header('location:login.php');
}

?>