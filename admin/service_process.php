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
        else if(!is_numeric($wpho)){
            $_SESSION['error']['wpho']="Please Enter Numeric Number";
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

        $ext=strtolower(substr($_FILES['simg']['name'],-4));
        // $imgsize=round($_FILES['simg']['size']/1024/1024,2);

         if(empty($_FILES['simg']['name'])){
             $_SESSION['error']['simg']="Please Select Service Images";
         }
         elseif(!($ext=='.jpg' || $ext=='.jpeg'|| $ext=='.png')){
             $_SESSION['error']['simg']="Please Check Image Format";
         }
         elseif(file_exists("../service_img/".$_FILES['simg']['name'])){
             $_SESSION['error']['simg']="Image already exists";
         }
        //  elseif($imgsize > 10){
        //      $_SESSION['error']['simg']="Image must be lower than 10mb";
        //  }

         if(!empty($_SESSION['error'])){
             header("location:service.php");
         }else{
           include("inc/conn.php");
           $t=time();

           $simg_nm=$t."_".$_FILES['simg']['name'];

           move_uploaded_file($_FILES['simg']['tmp_name'],"../service_img/".$simg_nm);

           $q="insert into service (s_cat,s_nm,w_nm,s_location,w_phone,s_price,s_desc,s_response,s_benefit,w_experience,s_time,s_img) values('".$scat."','".$snm."','".$wnm."','".$sloc."','".$wpho."','".$spri."','".$sdec."','".$sres."','".$sben."','".$wexe."','".$t."','".$simg_nm."')";

        mysqli_query($link,$q);

        $_SESSION['success']='Service Successfully Added !!!';
        header("location:service.php"); 

        }
        
    }
    else{
        header("location:service.php");
    }
?>