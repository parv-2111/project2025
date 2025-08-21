<?php
session_start();

if(!isset($_SESSION['user_type'])) 
  {
    header("location:login.php");
    exit;
  }
  
?>



<!DOCTYPE html>
<html lang="zxx">

<?php
  include("inc/style.php")
?>
<body>

<!--wrapper start-->
<div class="wrapper">
  
  <!--== Start Header Wrapper ==-->
<?php
  include("inc/top.php")
?>
  <!--== End Header Wrapper ==-->
  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Services</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Services</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Recent Job Area Wrapper ==-->
    <section class="recent-job-area recent-job-inner-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w1.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Darkento Ltd.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="service-details.php">Front-end Developer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w2.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Inspire Fitness Co.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="servive-details.php">Senior UI Designer</a></h3>
                <h5 class="work-type" data-text-color="#ff7e00">Part-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w3.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Cogent Data</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="service-details.php">Graphic Designer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Remote</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w4.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Obelus Concepts</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="service-details.php">UX Researcher</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w5.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Sanguine Skincare</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="service-details.php">Android App Developer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Remote</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w6.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Flux Water Gear</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="service-details.php">Product Designer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w7.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Darkento Ltd.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="service-details.php">Front-end Developer</a></h3>
                <h5 class="work-type">Full-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w8.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Inspire Fitness Co.</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="service-details.php">Senior UI Designer</a></h3>
                <h5 class="work-type" data-text-color="#ff7e00">Part-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item recent-job-style2-item">
              <div class="company-info">
                <div class="logo">
                  <a href="worker-details.php"><img src="assets/img/companies/w9.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="worker-details.php">Cogent Data</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="service-details.php">Graphic Designer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Part-time</h5>
                <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
              </div>
              <div class="recent-job-info">
                <div class="salary">
                  <h4>$5000</h4>
                  <p>/monthly</p>
                </div>
                <a class="btn-theme btn-sm" href="view-details.php">Apply Now</a>
              </div>
            </div>
            <!--== End Recent Job Item ==-->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="pagination-area">
              <nav>
                <ul class="page-numbers d-inline-flex">
                  <li>
                    <a class="page-number active" href="service.php">1</a>
                  </li>
                  <li>
                    <a class="page-number" href="service.php">2</a>
                  </li>
                  <li>
                    <a class="page-number" href="service.php">3</a>
                  </li>
                  <li>
                    <a class="page-number next" href="service.php">
                      <i class="icofont-long-arrow-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Recent Job Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <?php
  include("inc/footer.php")
  ?>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

  

<!--=======================Javascript============================-->

<?php
  include("inc/script.php")
?>

</body>

</html>
