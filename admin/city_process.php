<?php session_start();

    if(!empty($_POST))
    {
        extract($_POST);
        $error = array();

        if(empty($citynm))
        {
            $error[] = "Enter a City Name";
        }
        
        if(!empty($error))
        {
            foreach($error as $er)
            {
                echo $er."<br>";
            }
        }
        else{
            include("inc/conn.php");

            $t=time();

            $q="insert into city
            (city_nm,city_time)values ('".$citynm."','".$t."')";

            mysqli_query($link,$q);

            $_SESSION['success']="Done City Added Succesfully.";

            header("location:city.php");
        }
    }
    else
    {
        header("location:city.php");
    }
?>
