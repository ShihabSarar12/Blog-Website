<?php
    require '../database/db.php';
    if($_GET['entity'] == 'users'){
        //TODO implement other relation entity deletion
        // $deleteFromEntity = 'DELETE FROM ' .  
    }
    $sql = 'DELETE FROM ' . $_GET['entity'] . ' WHERE ' . $_GET['entityAtr'] . ' = ' . $_GET['id'] . ';';
    $result = mysqli_query($db_connect, $sql);
    if ($result > 0) {
        header("Location: http://localhost/SD_Project/backend/users/post.php");
    }
    echo "Error deleting record";
?>