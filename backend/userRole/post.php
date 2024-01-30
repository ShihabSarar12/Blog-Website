<?php
    session_start();
    require '../database/db.php';

    $blogCategory = $_POST['blogCategory'];
    $blogTitle = $_POST['blogTitle'];
    $blogDescription = $_POST['blogdescription'];


    
    // $sql = "INSERT INTO requestpost (blogTitle, blogCategory, blogDescription, blogImage) VALUES ('$blogTitle', '$blogCategory', '$blogDescription', '$imagePath')";


    $upload_photo = $_FILES['blogImage'];
    $after_explode = explode('.', $upload_photo['name']);
    $extension_name = end($after_explode);
    $allowed_extension = array('jpg', 'png', 'webp', 'jpeg', 'gif');
    // print_r($_POST['blogdescription']);
    // die();


    if(in_array($extension_name,$allowed_extension)){
        if($upload_photo['size'] <= 10000000){
            
            #role setup
            // $userCountQuery = "SELECT COUNT(*) as count FROM users";
            // $userCountResult = mysqli_query($db_connect, $userCountQuery);
            // $userCountData = mysqli_fetch_assoc($userCountResult);
            // $userCount = $userCountData['count'];
            // $role = ($userCount == 0) ? 'admin' : 'user';
            $id = $_SESSION['user_id'];

            $name = "BlogImage";
            $file_name = $name.'-'.$id.'-'.rand().'.'.$extension_name;
            $new_location = '../../uploads/blogImages/'.$file_name;

            move_uploaded_file($upload_photo['tmp_name'],$new_location);

            #insert code
            $insert_query = "INSERT INTO requestpost (blogTitle, blogCategory, blogDescription, id, blogImage) VALUES ('$blogTitle', '$blogCategory', '$blogDescription', '$id', '$file_name')";
            $insert_result = mysqli_query($db_connect, $insert_query);
            #insert code
            //echo "done";
            $_SESSION['complete'] = 'Blog Added Successfully!';
            header('location:http://localhost/SD_Project/backend/userRole/writeBlog.php');
        }
        else{
            $_SESSION['size'] = "File size must be 1mb";
            header('http://localhost/SD_Project/backend/userRole/writeBlog.php');
        }
    }
    else{
        $_SESSION['extension'] = "Invalid Extension";
        header('http://localhost/SD_Project/backend/userRole/writeBlog.php');
    }

?>