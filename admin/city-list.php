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
            <h1 class="m-0">City List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">City List</li>
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
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Cities</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                    if(isset($_SESSION['success'])){
                      echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';

                      unset($_SESSION['success']);
                    }
                ?>
                <table id="dtable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>City</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        include("inc/conn.php");

                        $ci_q="select * from city";

                        $ci_res=mysqli_query($link,$ci_q);

                        $no=1;

                        while ($ci_row = mysqli_fetch_assoc($ci_res)) {
    echo '<tr>
            <td>'.$no.'</td>
            <td><a href="#">'.$ci_row['city_nm'].'</a></td>
            <td>
                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                <a href="city_delete.php?citid='.$ci_row['city_id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Do You Want to Delete?\');">Delete</a>
                <a href="#" class="btn btn-primary btn-sm">Update</a>
            </td>
          </tr>';
    $no++;
}
                    ?>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
