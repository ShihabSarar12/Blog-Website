<?php
    require '../database/db.php';
    try{
        if($_GET['entity'] == 'users'){
            $delSqlUserpost = 'DELETE FROM userpost WHERE id = ' . $_GET['id'];
            $delUserpostResult = mysqli_query($db_connect, $delSqlUserpost);
            $delSqlReq = 'DELETE FROM requestpost WHERE id = ' . $_GET['id'];   
            $delReqResult = mysqli_query($db_connect, $delSqlReq);
        }
        $sql = 'DELETE FROM ' . $_GET['entity'] . ' WHERE ' . $_GET['entityAtr'] . ' = ' . $_GET['id'];
        $result = mysqli_query($db_connect, $sql);
        if ($result > 0) {
            header("Location: http://localhost/SD_Project/backend/users/post.php");
        }
    } catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
?>