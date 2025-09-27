<!-- service-details-old without chatgpt -->



<?php
session_start();
if(!isset($_SESSION['user_type'])) {
    header("location:login.php");
    exit;
}
include("inc/conn.php");

// get service id
if(isset($_GET['sid'])){
    $sid = intval($_GET['sid']);
    $q = "SELECT * FROM service s 
          INNER JOIN category c ON s.s_cat = c.cat_id
          WHERE s.s_id = $sid LIMIT 1";
    $res = mysqli_query($link, $q);
    $row = mysqli_fetch_assoc($res);
    if(!$row){
        die("Service not found!");
    }
} else {
    die("No service selected!");
}
?>

<!DOCTYPE html>
<html lang="zxx">

<?php include("inc/style.php"); ?>

<body>
<!--wrapper start-->
<div class="wrapper">

  <!--== Start Header Wrapper ==-->
  <?php include("inc/top.php"); ?>
  <!--== End Header Wrapper ==-->

  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/slider/header1.png">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Service Details</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Service Details</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Service Details Area Wrapper ==-->
    <section class="job-details-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="job-details-wrap">
              <div class="job-details-info">
                <div class="thumb">
                  <img src="service_img/<?= $row['s_img'] ?>" width="130" height="130" alt="<?= $row['s_nm'] ?>">
                </div>
                <div class="content">
                  <h4 class="title"><?= $row['s_nm'] ?></h4> <!-- Service Name -->
                  <h5 class="sub-title"><?= $row['w_nm'] ?></h5> <!-- Worker Name -->
                  <ul class="info-list">
                    <li><i class="icofont-location-pin"></i> <?= $row['s_location'] ?></li> <!-- Service Category -->
                    <li><i class="icofont-phone"></i> <?= $row['w_phone'] ?></li> <!-- Worker Phone -->
                    <li><i class="icofont-cart"></i> <?= $row['cat_nm'] ?></li> <!-- Service Category -->

                  </ul>
                </div>
              </div>

              <div class="job-details-price">
                <h4 class="title">₹<?= $row['s_price'] ?> <span>/service</span></h4>
                <a class="btn-theme btn-sm" href="https://docs.google.com/forms/d/1Awb1PaLgkgLN-Kav1SR7xPjhjKm9xmJ4qvqQ6dkotPY/viewform">Book Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-7 col-xl-8">
            <div class="job-details-item">

              <!-- Service Description -->
              <div class="content">
                <h4 class="title">Description</h4>
                <p class="desc"><?= $row['s_desc'] ?></p>
              </div>

              <!-- Service Responsibilities -->
              <div class="content">
                <h4 class="title">Responsibilities</h4>
                <ul class="job-details-list">
                  <?php 
                  // If you stored responsibilities as comma separated text
                  $tasks = explode(",", $row['s_response']);
                  foreach($tasks as $task){
                      echo '<li><i class="icofont-check"></i> '.trim($task).'</li>';
                  }
                  ?>
                </ul>
              </div>

              <!-- Service Benefits -->
              <div class="content">
                <h4 class="title">Benefits</h4>
                <ul class="job-details-list">
                  <?php 
                  // If you stored benefits as comma separated text
                  $benefits = explode(",", $row['s_benefit']);
                  foreach($benefits as $ben){
                      echo '<li><i class="icofont-check"></i> '.trim($ben).'</li>';
                  }
                  ?>
                </ul>
              </div>

              <!-- Work Experience -->
              <div class="content">
                <h4 class="title">Experience</h4>
                <p class="desc"><?= $row['w_experience'] ?> Years</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Service Details Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <?php include("inc/footer.php"); ?>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

  <!--=======================Javascript============================-->
  <?php include("inc/script.php"); ?>

</body>
</html>
