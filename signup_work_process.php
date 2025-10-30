<?php
session_start();
    if(!empty($_POST))
    {
        extract($_POST);
        $error = array ();

        if(empty($enm))
        {
            $error[] = "Please Enter Your Name!";
        }

        if(empty($email))
        {
            $error[] ="Please Enter Your Email!";
        }

        if(empty($pwd))
        {
            $error[] = "Please Enter a Password!";
        }
        elseif(strlen($pwd)<8)
        {
            $error[] = "Please Enter a Valid 6 digit Password!";
        }

        if(empty($mno))
        {
            $error[] = "Please Enter Your Mobile Number!";
        }
        elseif (strlen($mno) != 10 )
        {
            $error[] = "Please Enter a Valid Number!";
        }
        elseif (! is_numeric($mno))
        {
            $error[] = "Please Enter a Valid Number!";
        }

        if(empty($cat))
        {
            $error[] = "Please Enter Valid Category!";
        }

        if (!empty($error)) {
            foreach($error as $er)
            {
                echo $er.'<br/>';
            }
        }
        else
        {
            include("inc/conn.php");

            $t = time();

            $q = "insert into worker(e_nm, e_email, e_mno, e_pwd, e_cat, e_time) values ('".$enm."','".$email."','".$mno."','".$pwd."','".$cat."','".$t."')";
            
            mysqli_query($link,$q);
            $_SESSION['message']="You are Succesfully Logined As a Worker.";
            header("Location: signup.php");
        }
    }
    else
    {
        header("location:signup.php");
    }