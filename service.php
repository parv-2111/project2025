<?php
session_start();
if(!isset($_SESSION['user_type'])) {
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zxx">

<?php include("inc/style.php") ?>

<body>

<!--wrapper start-->
<div class="wrapper">

    <!--== Start Header Wrapper ==-->
    <?php include("inc/top.php") ?>
    <!--== End Header Wrapper ==-->

    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/slider/header1.png">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title">Service</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb justify-content-center">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Service</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Team Area Wrapper ==-->
        <section class="recent-job-area bg-color-gray">
  <div class="container" data-aos="fade-down">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h3 class="title">Services</h3>
          <div class="desc">
            <p>We Fix All Your House Holds</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <!--== Service 1 ==-->
      <div class="col-md-6 col-lg-4">
        <div class="recent-job-item">
          <div class="company-info">
            <div class="logo">
              <a href="service-details.php"><img src="assets/img/companies/1.jpg" width="75" height="75" alt="Service Image"></a>
            </div>
            <div class="content">
              <h4 class="name"><a href="service-details.php">Darkento Ltd.</a></h4>
              <p class="address">New York, USA</p>
            </div>
          </div>
          <div class="main-content">
            <h3 class="title"><a href="service-details.php">Front-end Development</a></h3>
            <p class="desc">
              Worker: Lauran Benitez<br>
              Experience: 3 Years<br>
              Price: $5000
            </p>
          </div>
          <div class="recent-job-info">
            <a class="btn-theme btn-sm" href="service-details.php">Read More</a>
          </div>
        </div>
      </div>

      <!--== Service 2 ==-->
      <div class="col-md-6 col-lg-4">
        <div class="recent-job-item">
          <div class="company-info">
            <div class="logo">
              <a href="service-details.php"><img src="assets/img/companies/2.jpg" width="75" height="75" alt="Service Image"></a>
            </div>
            <div class="content">
              <h4 class="name"><a href="service-details.php">Inspire Fitness Co.</a></h4>
              <p class="address">Los Angeles, USA</p>
            </div>
          </div>
          <div class="main-content">
            <h3 class="title"><a href="service-details.php">Senior UI Design</a></h3>
            <p class="desc">
              Worker: Valentine Anders<br>
              Experience: 4 Years<br>
              Price: $6000
            </p>
          </div>
          <div class="recent-job-info">
            <a class="btn-theme btn-sm" href="service-details.php">Read More</a>
          </div>
        </div>
      </div>

      <!--== Service 3 ==-->
      <div class="col-md-6 col-lg-4">
        <div class="recent-job-item">
          <div class="company-info">
            <div class="logo">
              <a href="service-details.php"><img src="assets/img/companies/3.jpg" width="75" height="75" alt="Service Image"></a>
            </div>
            <div class="content">
              <h4 class="name"><a href="service-details.php">Cogent Data</a></h4>
              <p class="address">Chicago, USA</p>
            </div>
          </div>
          <div class="main-content">
            <h3 class="title"><a href="service-details.php">Graphic Design</a></h3>
            <p class="desc">
              Worker: Shakia Aguilera<br>
              Experience: 2 Years<br>
              Price: $5500
            </p>
          </div>
          <div class="recent-job-info">
            <a class="btn-theme btn-sm" href="service-details.php">Read More</a>
          </div>
        </div>
      </div>

      <!--== Service 4 ==-->
      <div class="col-md-6 col-lg-4">
        <div class="recent-job-item">
          <div class="company-info">
            <div class="logo">
              <a href="service-details.php"><img src="assets/img/companies/4.jpg" width="75" height="75" alt="Service Image"></a>
            </div>
            <div class="content">
              <h4 class="name"><a href="service-details.php">Obelus Concepts</a></h4>
              <p class="address">New York, USA</p>
            </div>
          </div>
          <div class="main-content">
            <h3 class="title"><a href="service-details.php">UX Research</a></h3>
            <p class="desc">
              Worker: Assunta Manson<br>
              Experience: 5 Years<br>
              Price: $7000
            </p>
          </div>
          <div class="recent-job-info">
            <a class="btn-theme btn-sm" href="service-details.php">Read More</a>
          </div>
        </div>
      </div>

      <!--== Service 5 ==-->
      <div class="col-md-6 col-lg-4">
        <div class="recent-job-item">
          <div class="company-info">
            <div class="logo">
              <a href="service-details.php"><img src="assets/img/companies/5.jpg" width="75" height="75" alt="Service Image"></a>
            </div>
            <div class="content">
              <h4 class="name"><a href="service-details.php">Sanguine Skincare</a></h4>
              <p class="address">Boston, USA</p>
            </div>
          </div>
          <div class="main-content">
            <h3 class="title"><a href="service-details.php">Android App Development</a></h3>
            <p class="desc">
              Worker: David Silva<br>
              Experience: 3 Years<br>
              Price: $5000
            </p>
          </div>
          <div class="recent-job-info">
            <a class="btn-theme btn-sm" href="service-details.php">Read More</a>
          </div>
        </div>
      </div>

      <!--== Service 6 ==-->
      <div class="col-md-6 col-lg-4">
        <div class="recent-job-item">
          <div class="company-info">
            <div class="logo">
              <a href="service-details.php"><img src="assets/img/companies/6.jpg" width="75" height="75" alt="Service Image"></a>
            </div>
            <div class="content">
              <h4 class="name"><a href="service-details.php">Flux Water Gear</a></h4>
              <p class="address">Seattle, USA</p>
            </div>
          </div>
          <div class="main-content">
            <h3 class="title"><a href="service-details.php">Product Design</a></h3>
            <p class="desc">
              Worker: Jason Holt<br>
              Experience: 4 Years<br>
              Price: $6000
            </p>
          </div>
          <div class="recent-job-info">
            <a class="btn-theme btn-sm" href="service-details.php">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
        <!--== End Team Area Wrapper ==-->
    </main>

    <!--== Start Footer Area Wrapper ==-->
    <?php include("inc/footer.php") ?>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>
</div>

<!--=======================Javascript============================-->
<?php include("inc/script.php") ?>

</body>
</html>
