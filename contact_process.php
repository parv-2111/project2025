<?php
if(!empty($_POST))
{
    extract($_POST);
    $error = array ();

    if(empty($cu_fnm)) {
        $error[] = "Please Enter Your Name!";
    }
    if(empty($cu_email)) {
        $error[] ="Please Enter Your Email!";
    }
    if(empty($cu_message)) {
        $error[] ="Please Enter Your Message!";
    }
    if(empty($cu_mno)) {
        $error[] = "Please Enter Your Mobile Number!";
    }
    elseif (strlen($cu_mno) != 10 || !is_numeric($cu_mno)) {
        $error[] = "Please Enter a Valid Number!";
    }
    if(empty($cu_add)) {
        $error[] = "Please Enter an Address!";
    }

    if (!empty($error)) {
        foreach($error as $er) {
            echo $er.'<br/>';
        }
    }
    else {
        include("inc/conn.php");
        $t = time();

        $q = "INSERT INTO contact (cu_fnm, cu_email, cu_add, cu_mno, cu_message, cu_time) 
              VALUES ('".$cu_fnm."','".$cu_email."','".$cu_add."','".$cu_mno."','".$cu_message."','".$t."')";
        
        if(mysqli_query($link,$q)){
            echo "We will contact you as soon as possible.";
        } else {
            echo "Error: " . mysqli_error($link);
        }
    }
}
else {
    header("location:contact.php");
}
