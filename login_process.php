<?php 
session_start();

if(!empty($_POST))
{
    extract($_POST);
    $error = array();

    if(empty($email)) {
        $error[] = "Please Enter Your Email";
    }
    if(empty($pwd)) {
        $error[] = "Please Enter Your Password";
    }

    if(!empty($error)) {
        foreach($error as $er) {
            echo $er."<br>";
        }
    } else {
        include("inc/conn.php");

        // First check in customer table
        $q1 = "SELECT * FROM customer 
                WHERE c_email='".mysqli_real_escape_string($link,$email)."' 
                AND c_pwd='".mysqli_real_escape_string($link,$pwd)."' ";
        $res1 = mysqli_query($link,$q1);
        $row1 = mysqli_fetch_assoc($res1);

        if(!empty($row1)) {
            // Login as Customer
            $_SESSION['user_type'] = "customer";
            $_SESSION['customer']['email'] = $row1['c_email'];
            $_SESSION['customer']['id']    = $row1['c_id'];
            $_SESSION['customer']['status'] = true;

            header("location:index.php");
            exit;
        }

        // If not customer, check in worker table
        $q2 = "SELECT * FROM worker 
                WHERE e_email='".mysqli_real_escape_string($link,$email)."' 
                AND e_pwd='".mysqli_real_escape_string($link,$pwd)."' ";
        $res2 = mysqli_query($link,$q2);
        $row2 = mysqli_fetch_assoc($res2);

        if(!empty($row2)) {
            // Login as Worker
            $_SESSION['user_type'] = "worker";
            $_SESSION['worker']['email'] = $row2['e_email'];
            $_SESSION['worker']['id']    = $row2['e_id'];
            $_SESSION['worker']['status'] = true;

            header("location:index.php");
            exit;
        }

        // If not found in both tables
        echo "Wrong Username OR Password";
    }
}
else {
    header("location:login.php");
}
?>
