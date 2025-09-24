<?php
session_start();

if (isset($_SESSION['admin']['status']) && isset($_GET['sid'])) {
    include("inc/conn.php");

    $sid = (int)$_GET['sid'];

    $img_q = "SELECT s_img FROM service WHERE s_id = $sid";
    $sres = mysqli_query($link, $img_q);
    $srow = mysqli_fetch_assoc($sres);

    if (!empty($srow['s_img']) && file_exists("../service_img/".$srow['s_img'])) {
        unlink("../service_img/".$srow['s_img']);
    }

    $q = "DELETE FROM service WHERE s_id = $sid";
    if (mysqli_query($link, $q)) {
        $_SESSION['success'] = "Service Deleted Successfully";
    } else {
        $_SESSION['success'] = "Error deleting service: " . mysqli_error($link);
    }

    header("Location: service-list.php");
    exit;
} else {
    header("Location: login.php");
    exit;
}
?>
