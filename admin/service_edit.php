<?php
include("inc/conn.php");

// If sid not set, redirect
if (!isset($_GET['sid']) || empty($_GET['sid'])) {
    header("location:service-list.php");
    exit;
}

$sid = intval($_GET['sid']);

// Fetch existing service
$q = "SELECT * FROM service WHERE s_id='$sid' LIMIT 1";
$res = mysqli_query($link, $q);
if (!$res || mysqli_num_rows($res) == 0) {
    header("location:service-list.php");
    exit;
}
$row = mysqli_fetch_assoc($res);

// Update logic
if (isset($_POST['update'])) {
    $snm  = $_POST['snm'];
    $scat = $_POST['scat'];
    $wnm  = $_POST['wnm'];
    $scit = $_POST['scit'];
    $wpho = $_POST['wpho'];
    $spri = $_POST['spri'];
    $sdec = $_POST['sdec'];
    $sres = $_POST['sres'];
    $sben = $_POST['sben'];
    $wexe = $_POST['wexe'];

    // Image handling
    if (!empty($_FILES['simg']['name'])) {
        $img_name = time() . "_" . $_FILES['simg']['name'];
        $img_tmp  = $_FILES['simg']['tmp_name'];
        move_uploaded_file($img_tmp, "../service_img/" . $img_name);

        // Delete old image
        if (!empty($row['s_img']) && file_exists("../service_img/" . $row['s_img'])) {
            unlink("../service_img/" . $row['s_img']);
        }
    } else {
        $img_name = $row['s_img'];
    }

    $uq = "UPDATE service SET 
          s_nm='$snm',
          s_cat='$scat',
          w_nm='$wnm',
          s_location='$scit',
          w_phone='$wpho',
          s_price='$spri',
          s_desc='$sdec',
          s_response='$sres',
          s_benefit='$sben',
          w_experience='$wexe',
          s_img='$img_name'
       WHERE s_id='$sid'";

if (mysqli_query($link, $uq)) {
    session_start();
    $_SESSION['success'] = "Service updated successfully!";
    header("Location: service-list.php");
    exit;
} else {
    echo "Error: " . mysqli_error($link);
}

}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("inc/style.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php include("inc/navbar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DSS ADMIN PANEL</span>
    </a>
    <?php include("inc/sidebar.php") ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Service</li>
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
                <h3 class="card-title">Edit Service</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <?php
                    if (isset($_SESSION['success'])) {
                      echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
                      unset($_SESSION['success']);
                    }
                  ?>

                  <!-- Service Name -->
                  <div class="form-group">
                    <label for="snm">Service Name</label>
                    <input type="text" class="form-control" id="snm" name="snm" value="<?= $row['s_nm'] ?>" required>
                  </div>

                  <!-- Service Category -->
                  <div class="form-group">
                    <label for="scat">Service Category</label>
                    <select class="form-control" id="scat" name="scat" required>
                      <option value="0">Select Category</option>
                      <?php
                        $cat_q="select * from category where cat_status=1";
                        $cat_res=mysqli_query($link,$cat_q);
                        while($cat_row=mysqli_fetch_assoc($cat_res)) {
                          $sel = ($row['s_cat'] == $cat_row['cat_id']) ? "selected" : "";
                          echo '<option value="'.$cat_row['cat_id'].'" '.$sel.'>'.$cat_row['cat_nm'].'</option>';
                        }
                      ?>
                    </select>
                  </div>

                  <!-- Worker Name -->
                  <div class="form-group">
                    <label for="wnm">Worker Name</label>
                    <input type="text" class="form-control" id="wnm" name="wnm" value="<?= $row['w_nm'] ?>" required>
                  </div>

                  <!-- Service Location -->
                  <div class="form-group">
                    <label for="scit">Service Location</label>
                    <select class="form-control" id="scit" name="scit">
                      <option value="0">Select City</option>
                      <?php
                        $cit_q="select * from city where city_status=1";
                        $cit_res=mysqli_query($link,$cit_q);
                        while($cit_row=mysqli_fetch_assoc($cit_res)) {
                          $sel = ($row['s_location'] == $cit_row['city_nm']) ? "selected" : "";
                          echo '<option value="'.$cit_row['city_nm'].'" '.$sel.'>'.$cit_row['city_nm'].'</option>';
                        }
                      ?>
                    </select>
                  </div>

                  <!-- Worker Phone -->
                  <div class="form-group">
                    <label for="wpho">Worker Phone</label>
                    <input type="text" class="form-control" id="wpho" name="wpho" value="<?= $row['w_phone'] ?>" required>
                  </div>

                  <!-- Service Price -->
                  <div class="form-group">
                    <label for="spri">Service Price</label>
                    <input type="text" class="form-control" id="spri" name="spri" value="<?= $row['s_price'] ?>" required>
                  </div>

                  <!-- Service Description -->
                  <div class="form-group">
                    <label for="sdec">Service Description</label>
                    <textarea class="form-control" id="sdec" name="sdec"><?= $row['s_desc'] ?></textarea>
                  </div>

                  <!-- Service Responsibility -->
                  <div class="form-group">
                    <label for="sres">Service Responsibility</label>
                    <textarea class="form-control" id="sres" name="sres"><?= $row['s_response'] ?></textarea>
                  </div>

                  <!-- Service Benefit -->
                  <div class="form-group">
                    <label for="sben">Service Benefit</label>
                    <textarea class="form-control" id="sben" name="sben"><?= $row['s_benefit'] ?></textarea>
                  </div>

                  <!-- Work Experience -->
                  <div class="form-group">
                    <label for="wexe">Work Experience</label>
                    <input type="number" class="form-control" id="wexe" name="wexe" value="<?= $row['w_experience'] ?>">
                  </div>

                  <!-- Service Image -->
                  <div class="form-group">
                    <label for="simg">Service Image</label>
                    <div class="mb-2">
                      <img src="../service_img/<?= $row['s_img'] ?>" width="120">
                    </div>
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
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <a href="service-list.php" class="btn btn-secondary">Cancel</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

 <?php include("inc/copyright.php") ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include("inc/script.php") ?>
</body>
</html>
