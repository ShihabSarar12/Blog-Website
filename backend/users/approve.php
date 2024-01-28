<?php
    require '../database/db.php';
    try{
        $sql = 'INSERT INTO userpost (blogTitle, blogCategory, blogDescription, id)
        (SELECT blogTitle, blogCategory, blogDescription, id FROM requestpost WHERE blogID = '. $_GET['id'] .')';
        $result = mysqli_query($db_connect, $sql);
        $delSql = 'DELETE FROM requestpost WHERE blogID = ' . $_GET['id'];
        $delResult = mysqli_query($db_connect, $delSql);
        if ($result > 0 && $delResult > 0) {
            header("Location: http://localhost/SD_Project/backend/users/requests.php");
        }
    } catch(Exception $e){
        echo 'Error' . $e->getMessage();
    }
?>