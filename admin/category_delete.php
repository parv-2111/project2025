<?php
session_start();

if (isset($_SESSION['admin']['status']) && isset($_GET['cid'])) {
    include("inc/conn.php");

    $cid = (int)$_GET['cid'];

    if (mysqli_query($link, "DELETE FROM category WHERE cat_id = $cid")) {
        $_SESSION['success'] = "Category Deleted Successfully";
    } else {
        $_SESSION['error'] = "Error deleting category: " . mysqli_error($link);
    }

    header("Location: category-list.php");
    exit;
} else {
    header("Location: login.php");
    exit;
}
?>

