<?php
session_start();

if(! isset($_SESSION['customer']['status']))
{
  header("location:login.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Finate - Job Portal Website Template Using Bootstrap 5"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>Service Detailes</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">


    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Icofont Icon CSS ==-->
    <link href="assets/css/icofont.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="assets/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

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
              <h2 class="title">Employers Details</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Employers</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Employers Details Area Wrapper ==-->
    <section class="employers-details-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="employers-details-wrap">
              <div class="employers-details-info">
                <div class="thumb">
                  <img src="assets/img/companies/11.jpg" width="130" height="130" alt="Image-HasTech">
                </div>
                <div class="content">
                  <h4 class="title">Mukianso IT Sulution Ltd.</h4>
                  <ul class="info-list">
                    <li><i class="icofont-location-pin"></i> New York, USA</li>
                    <li><i class="icofont-phone"></i> +88 456 796 457</li>
                  </ul>
                  <button type="button" class="btn-theme">Follow Us</button>
                  <button type="button" class="btn-theme btn-white">Add Review</button>
                </div>
              </div>
              <div class="employers-counter">
                <div class="counter-item">
                  <h4 class="counter">86</h4>
                  <h5 class="title">Total jobs</h5>
                </div>
                <div class="counter-item">
                  <h4 class="counter">27</h4>
                  <h5 class="title">Review</h5>
                </div>
                <div class="counter-item">
                  <h4 class="counter">452</h4>
                  <h5 class="title">Views</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-xl-8">
            <div class="employers-details-item">
              <div class="content">
                <h4 class="title">About Employers</h4>
                <p class="desc">It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors.</p>
                <p class="desc">It is a long established fact that a reader will be distracted the readable content of a page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors.</p>
                <ul class="employers-details-list">
                  <li><i class="icofont-check"></i> Developing custom themes (WordPress.org & ThemeForest Standards)</li>
                  <li><i class="icofont-check"></i> Creating reactive website designs</li>
                  <li><i class="icofont-check"></i> Working under strict deadlines</li>
                  <li><i class="icofont-check"></i> Develop page speed optimized themes</li>
                </ul>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="content mb--0 pb-2">
                    <h4 class="title">Open Position</h4>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                  <!--== Start Recent Job Item ==-->
                  <div class="recent-job-item recent-job-style3-item">
                    <div class="company-info">
                      <div class="logo">
                        <a href="company-details.html"><img src="assets/img/companies/w1.jpg" width="75" height="75" alt="Image-HasTech"></a>
                      </div>
                      <div class="content mb--0">
                        <h4 class="name"><a href="company-details.html">Darkento Ltd.</a></h4>
                        <p class="address">New York, USA</p>
                      </div>
                    </div>
                    <div class="main-content">
                      <h3 class="title"><a href="job-details.html">Front-end Developer</a></h3>
                      <h5 class="work-type">Full-time</h5>
                      <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
                    </div>
                    <div class="recent-job-info">
                      <div class="salary">
                        <h4>$5000</h4>
                        <p>/monthly</p>
                      </div>
                      <a class="btn-theme btn-sm" href="job-details.html">Apply Now</a>
                    </div>
                  </div>
                  <!--== End Recent Job Item ==-->
                </div>
                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                  <!--== Start Recent Job Item ==-->
                  <div class="recent-job-item recent-job-style3-item">
                    <div class="company-info">
                      <div class="logo">
                        <a href="company-details.html"><img src="assets/img/companies/w2.jpg" width="75" height="75" alt="Image-HasTech"></a>
                      </div>
                      <div class="content mb--0">
                        <h4 class="name"><a href="company-details.html">Inspire Fitness Co.</a></h4>
                        <p class="address">New York, USA</p>
                      </div>
                    </div>
                    <div class="main-content">
                      <h3 class="title"><a href="job-details.html">Senior UI Designer</a></h3>
                      <h5 class="work-type" data-text-color="#ff7e00">Part-time</h5>
                      <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
                    </div>
                    <div class="recent-job-info">
                      <div class="salary">
                        <h4>$5000</h4>
                        <p>/monthly</p>
                      </div>
                      <a class="btn-theme btn-sm" href="job-details.html">Apply Now</a>
                    </div>
                  </div>
                  <!--== End Recent Job Item ==-->
                </div>
                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                  <!--== Start Recent Job Item ==-->
                  <div class="recent-job-item recent-job-style3-item">
                    <div class="company-info">
                      <div class="logo">
                        <a href="company-details.html"><img src="assets/img/companies/w4.jpg" width="75" height="75" alt="Image-HasTech"></a>
                      </div>
                      <div class="content">
                        <h4 class="name"><a href="company-details.html">Obelus Concepts</a></h4>
                        <p class="address">New York, USA</p>
                      </div>
                    </div>
                    <div class="main-content">
                      <h3 class="title"><a href="job-details.html">UX Researcher</a></h3>
                      <h5 class="work-type">Full-time</h5>
                      <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
                    </div>
                    <div class="recent-job-info">
                      <div class="salary">
                        <h4>$5000</h4>
                        <p>/monthly</p>
                      </div>
                      <a class="btn-theme btn-sm" href="job-details.html">Apply Now</a>
                    </div>
                  </div>
                  <!--== End Recent Job Item ==-->
                </div>
                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                  <!--== Start Recent Job Item ==-->
                  <div class="recent-job-item recent-job-style3-item">
                    <div class="company-info">
                      <div class="logo">
                        <a href="company-details.html"><img src="assets/img/companies/w5.jpg" width="75" height="75" alt="Image-HasTech"></a>
                      </div>
                      <div class="content">
                        <h4 class="name"><a href="company-details.html">Sanguine Skincare</a></h4>
                        <p class="address">New York, USA</p>
                      </div>
                    </div>
                    <div class="main-content">
                      <h3 class="title"><a href="job-details.html">Android App Developer</a></h3>
                      <h5 class="work-type" data-text-color="#0054ff">Remote</h5>
                      <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
                    </div>
                    <div class="recent-job-info">
                      <div class="salary">
                        <h4>$5000</h4>
                        <p>/monthly</p>
                      </div>
                      <a class="btn-theme btn-sm" href="job-details.html">Apply Now</a>
                    </div>
                  </div>
                  <!--== End Recent Job Item ==-->
                </div>
                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                  <!--== Start Recent Job Item ==-->
                  <div class="recent-job-item recent-job-style3-item">
                    <div class="company-info">
                      <div class="logo">
                        <a href="company-details.html"><img src="assets/img/companies/w7.jpg" width="75" height="75" alt="Image-HasTech"></a>
                      </div>
                      <div class="content">
                        <h4 class="name"><a href="company-details.html">Darkento Ltd.</a></h4>
                        <p class="address">New York, USA</p>
                      </div>
                    </div>
                    <div class="main-content">
                      <h3 class="title"><a href="job-details.html">Front-end Developer</a></h3>
                      <h5 class="work-type">Full-time</h5>
                      <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
                    </div>
                    <div class="recent-job-info">
                      <div class="salary">
                        <h4>$5000</h4>
                        <p>/monthly</p>
                      </div>
                      <a class="btn-theme btn-sm" href="job-details.html">Apply Now</a>
                    </div>
                  </div>
                  <!--== End Recent Job Item ==-->
                </div>
                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                  <!--== Start Recent Job Item ==-->
                  <div class="recent-job-item recent-job-style3-item">
                    <div class="company-info">
                      <div class="logo">
                        <a href="company-details.html"><img src="assets/img/companies/w8.jpg" width="75" height="75" alt="Image-HasTech"></a>
                      </div>
                      <div class="content">
                        <h4 class="name"><a href="company-details.html">Inspire Fitness Co.</a></h4>
                        <p class="address">New York, USA</p>
                      </div>
                    </div>
                    <div class="main-content">
                      <h3 class="title"><a href="job-details.html">Senior UI Designer</a></h3>
                      <h5 class="work-type" data-text-color="#ff7e00">Part-time</h5>
                      <p class="desc">CSS3, HTML5, Javascript, Bootstrap, Jquery</p>
                    </div>
                    <div class="recent-job-info">
                      <div class="salary">
                        <h4>$5000</h4>
                        <p>/monthly</p>
                      </div>
                      <a class="btn-theme btn-sm" href="job-details.html">Apply Now</a>
                    </div>
                  </div>
                  <!--== End Recent Job Item ==-->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4">
            <div class="employers-sidebar">
              <div class="widget-item">
                <div class="widget-title">
                  <h3 class="title">Information</h3>
                </div>
                <div class="summery-info">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="table-name">Categories</td>
                        <td class="dotted">:</td>
                        <td>Design & Software</td>
                      </tr>
                      <tr>
                        <td class="table-name">Since</td>
                        <td class="dotted">:</td>
                        <td>1996</td>
                      </tr>
                      <tr>
                        <td class="table-name">Views</td>
                        <td class="dotted">:</td>
                        <td>568+</td>
                      </tr>
                      <tr>
                        <td class="table-name">Reviews</td>
                        <td class="dotted">:</td>
                        <td>(4.8) <span class="rating"></span></td>
                      </tr>
                      <tr>
                        <td class="table-name">Total Jobs</td>
                        <td class="dotted">:</td>
                        <td>87+</td>
                      </tr>
                      <tr>
                        <td class="table-name">Location</td>
                        <td class="dotted">:</td>
                        <td>New York, USA</td>
                      </tr>
                      <tr>
                        <td class="table-name">Team Members</td>
                        <td class="dotted">:</td>
                        <td>300-500</td>
                      </tr>
                      <tr>
                        <td class="table-name">Job Success</td>
                        <td class="dotted">:</td>
                        <td>98%</td>
                      </tr>
                      <tr>
                        <td class="table-name">Phone</td>
                        <td class="dotted">:</td>
                        <td>+00 568 467 843</td>
                      </tr>
                      <tr>
                        <td class="table-name">Email</td>
                        <td class="dotted">:</td>
                        <td>yourmail@gmail.com</td>
                      </tr>
                      <tr>
                        <td class="table-name">Website</td>
                        <td class="dotted">:</td>
                        <td data-text-color="#ff6000">www.website.com</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="widget-item">
                <div class="widget-title">
                  <h3 class="title">Share With</h3>
                </div>
                <div class="social-icons">
                  <a href="https://www.facebook.com" target="_blank" rel="noopener"><i class="icofont-facebook"></i></a>
                  <a href="https://twitter.com" target="_blank" rel="noopener"><i class="icofont-twitter"></i></a>
                  <a href="https://www.skype.com" target="_blank" rel="noopener"><i class="icofont-skype"></i></a>
                  <a href="https://www.pinterest.com" target="_blank" rel="noopener"><i class="icofont-pinterest"></i></a>
                  <a href="https://dribbble.com/" target="_blank" rel="noopener"><i class="icofont-dribbble"></i></a>
                </div>
              </div>
              <div class="widget-item widget-contact">
                <div class="widget-title">
                  <h3 class="title">Contact Now</h3>
                </div>
                <div class="widget-contact-form">
                  <form id="contact-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php" method="POST">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" type="text" name="con_name" placeholder="Name:">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" type="email" name="con_email" placeholder="Email:">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" name="con_message" placeholder="Message"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb--0">
                          <button class="btn-theme d-block w-100" type="submit">Send Message</button>
                        </div>
                      </div>
                    </div>
                  </form>

                  <!--== Message Notification ==-->
                  <div class="form-message"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Employers Details Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <!--== Start Footer Top ==-->
    <?php
      include("inc/subscribe.php")
    ?>
    <!--== End Footer Top ==-->

    <!--== Start Footer Main ==-->
    <?php
      include("inc/footer.php")
    ?>  
    <!--== End Footer Main ==-->

    <!--== Start Footer Bottom ==-->
    <?php
      include("inc/copyright.php")
    ?>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

  
<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="assets/js/aos.min.js"></script>
<!--=== jQuery Counterup Min Js ===-->
<script src="assets/js/counterup.js"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="assets/js/waypoint.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="assets/js/custom.js"></script>

</body>

</html>