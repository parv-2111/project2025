<?php
session_start();

// Check if form is submitted
if (!empty($_POST)) {

    // Store old values to session
    $_SESSION['old'] = $_POST;

    // Initialize error array
    $_SESSION['error'] = array();

    // Extract variables from POST
    extract($_POST);

    /** ================================
     *  VALIDATIONS
     *  ================================
     */

    // Service Name
    if (empty($snm)) {
        $_SESSION['error']['snm'] = "Please Enter Service Name";
    }

    // Service Category
    if (empty($scat)) {
        $_SESSION['error']['scat'] = "Please Enter Service Category";
    }

    // Worker Name
    if (empty($wnm)) {
        $_SESSION['error']['wnm'] = "Please Enter Worker Name";
    }

    // Service Location
    if (empty($scit)) {
        $_SESSION['error']['scit'] = "Please Enter Service Location";
    }

    // Worker Phone
    if (empty($wpho)) {
        $_SESSION['error']['wpho'] = "Please Enter Worker Contact Number";
    } elseif (!is_numeric($wpho)) {
        $_SESSION['error']['wpho'] = "Please Enter Numeric Number";
    }

    // Service Price
    if (empty($spri)) {
        $_SESSION['error']['spri'] = "Please Enter Service Price";
    } elseif (!is_numeric($spri)) {
        $_SESSION['error']['spri'] = "Please Enter Numeric Price";
    }

    // Service Description
    if (empty($sdec)) {
        $_SESSION['error']['sdec'] = "Please Enter Service Description";
    }

    // Service Responsibility
    if (empty($sres)) {
        $_SESSION['error']['sres'] = "Please Enter Service Responsibility";
    }

    // Service Benefits
    if (empty($sben)) {
        $_SESSION['error']['sben'] = "Please Enter Service Benefits";
    }

    // Worker Experience
    if (empty($wexe)) {
        $_SESSION['error']['wexe'] = "Please Enter Experience";
    }

    // Service Image Validation
    $ext = strtolower(substr($_FILES['simg']['name'], -4));
    // $imgsize = round($_FILES['simg']['size'] / 1024 / 1024, 2); // image size in MB

    if (empty($_FILES['simg']['name'])) {
        $_SESSION['error']['simg'] = "Please Select Service Images";
    } elseif (!($ext == '.jpg' || $ext == 'jpeg' || $ext == '.png')) {
        $_SESSION['error']['simg'] = "Please Check Image Format (Only JPG, JPEG, PNG)";
    } elseif (file_exists("../service_img/" . $_FILES['simg']['name'])) {
        $_SESSION['error']['simg'] = "Image already exists";
    }
    // elseif ($imgsize > 10) {
    //     $_SESSION['error']['simg'] = "Image must be lower than 10MB";
    // }

    /** ================================
     *  IF ERRORS -> Redirect back
     *  ================================
     */
    if (!empty($_SESSION['error'])) {
        header("location:service.php");
        exit();
    }

    /** ================================
     *  IF NO ERRORS -> Insert Data
     *  ================================
     */
    include("inc/conn.php");

    $t = time();
    $simg_nm = $t . "_" . $_FILES['simg']['name'];

    // Move uploaded file
    move_uploaded_file($_FILES['simg']['tmp_name'], "../service_img/" . $simg_nm);

    // Insert query
    $q = "INSERT INTO service 
            (s_cat, s_nm, w_nm, s_location, w_phone, s_price, s_desc, s_response, s_benefit, w_experience, s_time, s_img) 
          VALUES 
            ('$scat', '$snm', '$wnm', '$scit', '$wpho', '$spri', '$sdec', '$sres', '$sben', '$wexe', '$t', '$simg_nm')";

    

   if(mysqli_query($link, $q)){
        $_SESSION['success'] = "Service Added Successfully!";
        unset($_SESSION['old']); //clear old values after success
        header("Location: service.php");
        exit;
    } else {
        $_SESSION['error']['db'] = "Error inserting record: " . mysqli_error($link);
        header("Location: service.php");
        exit;
    }
}
    
?>