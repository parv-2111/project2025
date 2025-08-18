<?php session_start();

if(! empty($_POST))
{
    extract($_POST);
    $error=array();

    if(empty ($unm))
    {
        $error[]="Please Enter Your email";
    }
    if(empty ($pwd))
    {
         $error[]="Please Enter Your Password";
    }

    if(! empty($error))
    {
        foreach($error as $er)
            {
                echo $er."<br>";
            }
    }
    else
    {
        include("inc/conn.php");

        $q = "select * from admin where
                a_email ='".mysqli_real_escape_string($link,$unm)." ' and
                a_pwd = '".mysqli_real_escape_string($link,$pwd)." ' ";

        $res=mysqli_query($link,$q);

        $row=mysqli_fetch_assoc($res);

        if(empty($row))
        {
            echo "Wrong Username OR Password";
        }
        else{
            $_SESSION['admin']['email']= $row['a_email'];
            $_SESSION['admin']['id']=$row['a_id'];
            $_SESSION['admin']['status']= true;

            header("location:index.php");
            
        }
    }
}
else
{
    header("location:login.php");
}


?>