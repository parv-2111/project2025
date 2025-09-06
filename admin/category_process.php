<?php session_start();

    if(!empty($_POST))
    {
        extract($_POST);
        $error = array();

        if(empty($cnm))
        {
            $error[] = "Enter a Category Name";
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

            $q="insert into category
            (cat_nm,cat_time)values ('".$cnm."','".$t."')";

            mysqli_query($link,$q);

            $_SESSION['success']="Done Category Added Succesfully.";

            header("location:category.php");
        }
    }
    else
    {
        header("location:category.php");
    }
?>
