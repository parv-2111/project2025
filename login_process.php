

<?php session_start();

if(! empty($_POST))
{
extract($_POST);
$error=array();

    if(empty ($email))
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

    $q = "select * from customer where
    c_email='".mysqli_real_escape_string($link,$email)." ' and
    c_pwd= '".mysqli_real_escape_string($link,$pwd)." ' ";

        $res=mysqli_query($link,$q);

        $row=mysqli_fetch_assoc($res);

        if(empty($row))
        {
        echo "Wrong Username OR Password";
        }
    else{
    $_SESSION['customer']['email']= $row['c_email'];
    $_SESSION['customer']['id']=$row['c_id'];
    $_SESSION['customer']['status']= true;
   

    header("location:index.php");
                                                                                                                                            
    }
    }
}
else
{
header("location:login.php");
}

?>