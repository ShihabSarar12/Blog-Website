<?php
    require '../database/db.php';
    session_start();
    try{
        $sql = 'INSERT INTO userpost (blogTitle, blogCategory, blogDescription, id, blogImage)
        (SELECT blogTitle, blogCategory, blogDescription, id, blogImage FROM requestpost WHERE blogID = '. $_GET['id'] .')';
        $result = mysqli_query($db_connect, $sql);
        $emailSql = "SELECT * FROM requestpost WHERE blogID = " . $_GET['id'];
        $emailResult = mysqli_query($db_connect, $emailSql);
        $post = mysqli_fetch_assoc($emailResult);
        $_SESSION['post'] = $post['blogDescription'];
        $delSql = 'DELETE FROM requestpost WHERE blogID = ' . $_GET['id'];
        $delResult = mysqli_query($db_connect, $delSql);
        if ($result > 0 && $delResult > 0) {
            header("Location: http://localhost/SD_Project/phpmailer_smtp/test.php");
        }
    } catch(Exception $e){
        echo 'Error' . $e->getMessage();
    }
?>