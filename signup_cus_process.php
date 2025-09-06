<?php
    if(!empty($_POST))
    {
        extract($_POST);
        $error = array ();

        if(empty($cnm))
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
        elseif(strlen($pwd)<7)
        {
            $error[] = "Please Enter a Valid 8 digit Password!";
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

            $q = "insert into customer(c_nm, c_email, c_mno, c_pwd, c_time) values ('".$cnm."','".$email."','".$mno."','".$pwd."','".$t."')";
            
            mysqli_query($link,$q);
            echo "You are Succesfully Logined As a Customer.";
            
          
        }
    }
    else
    {
        header("location:signup.php");
    }