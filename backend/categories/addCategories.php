<?php
session_start();
require '../database/db.php';

$categoryName = $_POST['categoryName'];

if (!empty($categoryName)) {
    #insert code
    $insert_query = "INSERT INTO categories(category_name) VALUES ('$categoryName')";
    $insert_result = mysqli_query($db_connect, $insert_query);
    $_SESSION['success'] = "Category '$categoryName' added successfully!";
    header("location:http://localhost/SD_Project/backend/categories/categories.php");
    exit();
} else {
    
    $_SESSION['error'] = "Error: Category name is required!";
    header("location:http://localhost/SD_Project/backend/categories/categories.php");
    exit();
}
?>
