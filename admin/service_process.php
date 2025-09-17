<?php

    session_start();    

    if(!empty($_POST)){
    extract($_POST);
    $_SESSION['error'] = array();

        if(empty($snm)){
            $_SESSION['error']['snm']="Please Enter Service Name";
        }

        if(empty($scat)){
            $_SESSION['error']['scat']="Please Enter Service Category";
        }

        if(empty($wnm)){
            $_SESSION['error']['wnm']="Please Enter Worker Name";
        }

        if(empty($sloc)){
            $_SESSION['error']['sloc']="Please Enter Service Location";
        }

        if(empty($wpho)){
            $_SESSION['error']['wpho']="Please Enter Worker Contact Number";
        }

        if(empty($spri)){
            $_SESSION['error']['spri']="Please Enter Service Price";
        }
        else if(!is_numeric($spri)){
            $_SESSION['error']['spri']="Please Enter Numeric Price";
        }
        
        if(empty($sdec)){
            $_SESSION['error']['sdec']="Please Enter Service Description";
        }

        if(empty($sres)){
            $_SESSION['error']['sres']="Please Enter Service Responsibility";
        }

        if(empty($sben)){
            $_SESSION['error']['sben']="Please Enter Service Benefits";
        }

        if(empty($wexe)){
            $_SESSION['error']['wexe']="Please Enter Experience";
        }

        if(empty($simg)){
            $_SESSION['error']['simg']="Please Enter Service Images";
        }

        if(!empty($_SESSION['error'])){
            header("location:service.php");
        }
        else{
            echo "Well Done Parv";
        }
        
    }
    else{
        header("location:service.php");
    }
?>