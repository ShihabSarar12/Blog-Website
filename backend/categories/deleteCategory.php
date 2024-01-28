<?php
session_start();
include '../database/db.php';

$categoryId = isset($_GET['id']) ? $_GET['id'] : null;

if ($categoryId) {
    $categoryId = mysqli_real_escape_string($db_connect, $categoryId);
    $sql = "DELETE FROM categories WHERE id = $categoryId";

    if (mysqli_query($db_connect, $sql)) {
        $_SESSION['delete'] = "Category deleted successfully!";
        header("location:http://localhost/SD_Project/backend/categories/categories.php");
        exit();
    } else {
        $_SESSION['error'] = "Error deleting category: " . mysqli_error($db_connect);
        header("location:http://localhost/SD_Project/backend/categories/categories.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Error: Category ID is missing!";
    header("location:http://localhost/SD_Project/backend/categories/categories.php");
    exit();
}

?>
