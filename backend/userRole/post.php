<?php
    require '../database/db.php';

    $blogCategory = $_POST['blogCategory'];
    $blogTitle = $_POST['blogTitle'];
    $blogDescription = $_POST['blogdescription'];
    echo $blogCategory.'<br>';
    echo $blogTitle.'<br>';
    echo $blogDescription.'<br>';
    die();
    $sql = "INSERT INTO requestpost (blogTitle, blogCategory, blogDescription, blogImage) VALUES ('$blogTitle', '$blogCategory', '$blogDescription', '$imagePath')";
?>