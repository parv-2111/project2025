<?php

include("inc/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("inc/style.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
<?php
  include("inc/preloader.php");
?>
  <!-- Navbar -->
  <?php include("inc/navbar.php"); ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <?php
    include("inc/brandlogo.php")
   ?>
    <?php include("inc/sidebar.php"); ?>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Category List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Categories</h3>
              </div>

              <div class="card-body">

                <!-- Success message -->
                <?php
                if (isset($_SESSION['success'])) {
                    echo '<p class="alert alert-success">'.htmlspecialchars($_SESSION['success']).'</p>';
                    unset($_SESSION['success']);
                }
                ?>

                <table id="dtable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $c_q = "SELECT * FROM category";
                    $c_res = mysqli_query($link, $c_q);

                    if ($c_res && mysqli_num_rows($c_res) > 0) {
                        $no = 1;
                        while ($c_row = mysqli_fetch_assoc($c_res)) {
                            echo '<tr>
                                    <td>'.$no.'</td>
                                    <td><a href="#">'.htmlspecialchars($c_row['cat_nm']).'</a></td>
                                    <td>
                                        <a href="category_edit.php?cid='.$c_row['cat_id'].'" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="category_delete.php?cid='.$c_row['cat_id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Do You Want to Delete?\');">Delete</a>
                                    </td>
                                  </tr>';
                            $no++;
                        }
                    } else {
                        echo '<tr><td colspan="3">No categories found</td></tr>';
                    }
                    ?>
                  </tbody>
                </table>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include("inc/copyright.php"); ?>

  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<?php include("inc/script.php"); ?>
</body>
</html>
