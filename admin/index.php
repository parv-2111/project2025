<!DOCTYPE html>
<html lang="en">
<?php
  include("inc/conn.php");   // Added DB connection
  include("inc/style.php");
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 <?php
    include("inc/navbar.php");
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php
      include("inc/brandlogo.php")
    ?>

<?php
  include("inc/sidebar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

<?php
$totalservice  = mysqli_fetch_row(mysqli_query($link, "SELECT COUNT(*) FROM service"))[0];
$totalworker   = mysqli_fetch_row(mysqli_query($link, "SELECT COUNT(DISTINCT w_nm) FROM service"))[0];
$totalCategory = mysqli_fetch_row(mysqli_query($link, "SELECT COUNT(*) FROM category"))[0];
$totalcity     = mysqli_fetch_row(mysqli_query($link, "SELECT COUNT(DISTINCT s_location) FROM service"))[0];
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                  <div class="inner">
                      <h3><?php echo $totalservice; ?></h3>
                      <p>Total Services</p>
                  </div>
                  <a href="service-list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                  <div class="inner">
                      <h3><?php echo $totalworker; ?></h3>
                      <p>Total Workers</p>
                  </div>
                  <a href="service-list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                  <div class="inner">
                      <h3><?php echo $totalCategory; ?></h3>
                      <p>Total Categories</p>
                  </div>
                  <a href="category-list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                  <div class="inner">
                      <h3><?php echo $totalcity; ?></h3>
                      <p>Total Cities</p>
                  </div>
                  <a href="city-list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>

 <?php
  include("inc/copyright.php");
 ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<!-- Scripts -->
<?php
    include("inc/script.php");
?>
</body>
</html>
