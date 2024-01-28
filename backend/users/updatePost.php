<?php
    require '../database/db.php';

    try {
        $blogTitle = mysqli_real_escape_string($db_connect, $_POST['blogTitle']);
        $blogDescription = mysqli_real_escape_string($db_connect, $_POST['blogDescription']);
        $blogCategory = mysqli_real_escape_string($db_connect, $_POST['blogCategory']);
        $blogID = mysqli_real_escape_string($db_connect, $_POST['blogID']);

        $sql = "UPDATE userpost SET blogTitle = '$blogTitle', blogDescription = '$blogDescription', blogCategory = '$blogCategory' WHERE blogID = '$blogID'";
        $result = mysqli_query($db_connect, $sql);
        if($result > 0){
            header("Location: http://localhost/SD_Project/backend/users/post.php");
        }
    } catch(Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>
