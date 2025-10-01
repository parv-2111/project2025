<?php

include("inc/conn.php");

// If cid not set, redirect
if (!isset($_GET['cid']) || empty($_GET['cid'])) {
    header("location:category-list.php");
    exit;
}

$cid = intval($_GET['cid']);

// Fetch existing category
$q = "SELECT * FROM category WHERE cat_id='$cid' LIMIT 1";
$res = mysqli_query($link, $q);
if (!$res || mysqli_num_rows($res) == 0) {
    header("location:category-list.php");
    exit;
}
$row = mysqli_fetch_assoc($res);

// Update logic
if (isset($_POST['update'])) {
    $cat_name = mysqli_real_escape_string($link, $_POST['cat_name']);

    if(empty($cat_name)) {
        $error = "Category name cannot be empty.";
    } else {
        $uq = "UPDATE category SET cat_nm='$cat_name' WHERE cat_id='$cid'";
        if (mysqli_query($link, $uq)) {
            $_SESSION['success'] = "Category updated successfully!";
            header("Location: category-list.php");
            exit;
        } else {
            $error = "Error updating category: " . mysqli_error($link);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("inc/style.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php include("inc/navbar.php"); ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DSS ADMIN PANEL</span>
    </a>
    <?php include("inc/sidebar.php"); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Category</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
              </div>

              <!-- form start -->
              <form method="post">
                <div class="card-body">

                  <?php
                    if(isset($error)) {
                        echo '<p class="alert alert-danger">'.$error.'</p>';
                    }
                    if(isset($_SESSION['success'])) {
                        echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
                        unset($_SESSION['success']);
                    }
                  ?>

                  <!-- Category Name -->
                  <div class="form-group">
                    <label for="cat_name">Category Name</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name" value="<?= htmlspecialchars($row['cat_nm']) ?>" required>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <a href="category-list.php" class="btn btn-secondary">Cancel</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include("inc/copyright.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include("inc/script.php"); ?>
</body>
</html>
