<!DOCTYPE html>
<html lang="en">
<?php
  include("inc/style.php")
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 <?php
    include("inc/navbar.php")
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DSS ADMIN PANEL</span>
    </a>

   
      

<?php
  include("inc/sidebar.php")
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Service </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">        
              <div class="card-header">
                <h3 class="card-title">Add New Service</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="service_process.php" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                  <?php
                // if(!empty($_SESSION['error'])){
                //     foreach($_SESSION['error'] as $er){
                //         echo '<font color="red">'.$er.'</font><br />';
                //     }
                // }

               if( isset($_SESSION['success']))
                    {
                      echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
                      unset($_SESSION['success']);
                    }
                  ?>
                 
                  <div class="form-group">
                    <label for="snm">Service Name</label>
                    <input type="text" class="form-control" id="snm" name="snm" placeholder="Enter Service">
                    <?php
                        if(isset($_SESSION['error']['snm'])){
                            echo '<font color="red">'.$_SESSION['error']['snm'].'</font><br />';
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="scat">Service Category</label>
                    <select class="form-control" id="scat" name="scat" placeholder="Enter Service Category">
                        <option value="0">Select Category</option>
                        <?php
                            include("inc/conn.php");

                             $cat_q="select * from category where cat_status=1";
                             
                             $cat_res=mysqli_query($link,$cat_q);

                             while($cat_row=mysqli_fetch_assoc($cat_res))
                             {
                                echo '<option value="'.$cat_row['cat_id'].'">'.$cat_row['cat_nm'].'</option>';
                             }
                        ?>
                        <?php
                        if(isset($_SESSION['error']['scat'])){
                            echo '<font color="red">'.$_SESSION['error']['scat'].'</font><br />';
                        }
                    ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="wnm">Worker Name</label>
                    <input type="text" class="form-control" id="wnm" name="wnm" placeholder="Enter Worker Name">
                    <?php
                        if(isset($_SESSION['error']['wnm'])){
                            echo '<font color="red">'.$_SESSION['error']['wnm'].'</font><br />';
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="sloc">Service Location</label>
                    <input type="text" class="form-control" id="sloc" name="sloc" placeholder="Enter Service Location">
                    <?php
                        if(isset($_SESSION['error']['sloc'])){
                            echo '<font color="red">'.$_SESSION['error']['sloc'].'</font><br />';
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="wpho">Worker Phone</label>
                    <input type="tel" class="form-control" id="wpho" name="wpho" placeholder="Phone Number">
                    <?php
                        if(isset($_SESSION['error']['wpho'])){
                            echo '<font color="red">'.$_SESSION['error']['wpho'].'</font><br />';
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="spri">Service Price</label>
                    <input type="text" class="form-control" id="spri" name="spri" placeholder="Enter Service Price">
                    <?php
                        if(isset($_SESSION['error']['spri'])){
                            echo '<font color="red">'.$_SESSION['error']['spri'].'</font><br />';
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="sdec">Service Description</label>
                    <textarea class="form-control" id="sdec" name="sdec" placeholder="Enter Service Description"></textarea> 
                    <?php
                        if(isset($_SESSION['error']['sdec'])){
                            echo '<font color="red">'.$_SESSION['error']['sdec'].'</font><br />';
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="sres">Service Responsibility</label>
                   <textarea class="form-control" id="sres" name="sres" placeholder="Enter Service Responsibilities"></textarea>
                   <?php
                        if(isset($_SESSION['error']['sres'])){
                            echo '<font color="red">'.$_SESSION['error']['sres'].'</font><br />';
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="sben">Service Benefit</label>
                    <textarea class="form-control" id="sben" name="sben" placeholder="Enter Service Benefit"></textarea>
                    <?php
                        if(isset($_SESSION['error']['sben'])){
                            echo '<font color="red">'.$_SESSION['error']['sben'].'</font><br />';
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="wexe">Work Experience</label>
                    <input type="number" class="form-control" id="wexe" name="wexe" placeholder="Enter Work Experince ">
                    <?php
                        if(isset($_SESSION['error']['wexe'])){
                            echo '<font color="red">'.$_SESSION['error']['wexe'].'</font><br />';
                        }
                    ?>
                  </div>

                  <div class="form-group">
                    <label for="simg">Service Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="simg" id="simg">
                        <label class="custom-file-label" for="simg">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php
                    if(!empty($_SESSION['error'])){
                          unset($_SESSION['error']);
                    }
                ?>
              </form>
            </div>
            <!-- /.card -->

            


          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

 <?php
  include("inc/copyright.php")
 ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php
    include("inc/script.php")
?>
</body>
</html>
