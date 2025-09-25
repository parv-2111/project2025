<?php
session_start();

if (isset($_SESSION['admin']['status']) && isset($_GET['citid'])) {
    include("inc/conn.php");

   
    $cid = (int)$_GET['citid'];

    if (mysqli_query($link, "DELETE FROM city WHERE city_id = $cid")) {
        $_SESSION['success'] = "City Deleted Successfully";
    } else {
        $_SESSION['error'] = "Error deleting city: " . mysqli_error($link);
    }

    header("Location: city-list.php");
    exit;
} else {
    header("Location: login.php");
    exit;
}
?>
