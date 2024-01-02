<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: http://localhost/SD_Project/backend/login/login.php");
        exit();
    }
?>