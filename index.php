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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Finate - Job Portal Website Template Using Bootstrap 5"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>Finate - Job Portal Website Template Using Bootstrap 5</title>

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
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="home-slider-container default-slider-container">
        <div class="home-slider-wrapper slider-default">
          <div class="slider-content-area" data-bg-img="assets/img/slider/slider-bg.jpg">
            <div class="container pt--0 pb--0">
              <div class="slider-container">
                <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-lg-8">
                    <div class="slider-content">
                      <h2 class="title"><span class="counter" data-counterup-delay="80">2,568</span> job available <br>You can choose your dream job</h2>
                      <p class="desc">Find great job for build your bright career. Have many job in this plactform.</p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="job-search-wrap">
                      <div class="job-search-form">
                        <form action="#">
                          <div class="row row-gutter-10">
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Job title or keywords">
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <select class="form-control">
                                  <option value="1" selected>Choose City</option>
                                  <option value="2">New York</option>
                                  <option value="3">California</option>
                                  <option value="4">Illinois</option>
                                  <option value="5">Texas</option>
                                  <option value="6">Florida</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <select class="form-control">
                                  <option value="1" selected>Category</option>
                                  <option value="2">Web Designer</option>
                                  <option value="3">Web Developer</option>
                                  <option value="4">Graphic Designer</option>
                                  <option value="5">App Developer</option>
                                  <option value="6">UI &amp; UX Expert</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <button type="button" class="btn-form-search"><i class="icofont-search-1"></i></button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="play-video-btn">
              <a href="https://www.youtube.com/mcvqOUtcAJg" class="video-popup">
                <img src="assets/img/icons/play.png" alt="Image-HasTech">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="home-slider-shape">
        <img class="shape1" data-aos="fade-down" data-aos-duration="1500" src="assets/img/slider/vector1.png" width="270" height="234" alt="Image-HasTech">
        <img class="shape2" data-aos="fade-left" data-aos-duration="2000" src="assets/img/slider/vector2.png" width="201" height="346" alt="Image-HasTech">
        <img class="shape3" data-aos="fade-right" data-aos-duration="2000" src="assets/img/slider/vector3.png" width="276" height="432" alt="Image-HasTech">
        <img class="shape4" data-aos="flip-left" data-aos-duration="1500" src="assets/img/slider/vector4.png" width="127" height="121" alt="Image-HasTech">
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Job Category Area Wrapper ==-->
    <section class="job-category-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Popular Category</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-gutter-20" >
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Accounting/Finance <span>(305)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Production/Operation <span>(95)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Education/Training <span>(212)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Design/Creative <span>(93)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Health & Fitness <span>(4)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Research/Consultancy <span>(34)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Engineer/Architects <span>(376)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Telecommunication <span>(450)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Data Entry/Operator <span>(25)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Production/Operation <span>(95)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Marketing/Sales <span>(666)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Job Category Item ==-->
            <div class="job-category-item">
              <div class="content">
                <h3 class="title"><a href="job-details.html">Security/Support Service <span>(62)</span></a></h3>
              </div>
              <a class="overlay-link" href="job-details.html"></a>
            </div>
            <!--== End Job Category Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Job Category Area Wrapper ==-->

    <!--== Start Recent Job Area Wrapper ==-->
    <section class="recent-job-area bg-color-gray">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Recent Job Circulars</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/1.jpg" width="75" height="75" alt="Image-HasTech"></a>
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
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/2.jpg" width="75" height="75" alt="Image-HasTech"></a>
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
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/3.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Cogent Data</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Graphic Designer</a></h3>
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
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/4.jpg" width="75" height="75" alt="Image-HasTech"></a>
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
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/5.jpg" width="75" height="75" alt="Image-HasTech"></a>
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
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/6.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Flux Water Gear</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Product Designer</a></h3>
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
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/7.jpg" width="75" height="75" alt="Image-HasTech"></a>
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
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/8.jpg" width="75" height="75" alt="Image-HasTech"></a>
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
          <div class="col-md-6 col-lg-4">
            <!--== Start Recent Job Item ==-->
            <div class="recent-job-item">
              <div class="company-info">
                <div class="logo">
                  <a href="company-details.html"><img src="assets/img/companies/9.jpg" width="75" height="75" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="name"><a href="company-details.html">Cogent Data</a></h4>
                  <p class="address">New York, USA</p>
                </div>
              </div>
              <div class="main-content">
                <h3 class="title"><a href="job-details.html">Graphic Designer</a></h3>
                <h5 class="work-type" data-text-color="#0054ff">Part-time</h5>
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
    </section>
    <!--== End Recent Job Area Wrapper ==-->

    <!--== Start Work Process Area Wrapper ==-->
    <section class="work-process-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">How It Work?</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="working-process-content-wrap">
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="assets/img/icons/w1.png" alt="Image-HasTech">
                      <img class="icon-hover" src="assets/img/icons/w1-hover.png" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">Create an Account</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="assets/img/icons/right-arrow.png" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.png" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="assets/img/icons/w2.png" alt="Image-HasTech">
                      <img class="icon-hover" src="assets/img/icons/w2-hover.png" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">CV/Resume</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="assets/img/icons/right-arrow.png" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.png" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="assets/img/icons/w3.png" alt="Image-HasTech">
                      <img class="icon-hover" src="assets/img/icons/w3-hover.png" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">Find Your Job</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon">
                    <img class="shape-icon" src="assets/img/icons/right-arrow.png" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.png" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
              <div class="working-col">
                <!--== Start Work Process ==-->
                <div class="working-process-item">
                  <div class="icon-box">
                    <div class="inner">
                      <img class="icon-img" src="assets/img/icons/w4.png" alt="Image-HasTech">
                      <img class="icon-hover" src="assets/img/icons/w4-hover.png" alt="Image-HasTech">
                    </div>
                  </div>
                  <div class="content">
                    <h4 class="title">Save & Apply</h4>
                    <p class="desc">It is long established fact reader distracted readable content</p>
                  </div>
                  <div class="shape-arrow-icon d-none">
                    <img class="shape-icon" src="assets/img/icons/right-arrow.png" alt="Image-HasTech">
                    <img class="shape-icon-hover" src="assets/img/icons/right-arrow2.png" alt="Image-HasTech">
                  </div>
                </div>
                <!--== End Work Process ==-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Work Process Area Wrapper ==-->

    
    <!--== Start Team Area Wrapper ==-->
    <section class="team-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">Best Candidate</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="candidate-details.html">
                  <img src="assets/img/team/1.jpg" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="candidate-details.html">Lauran Benitez</a></h4>
                <h5 class="sub-title">Web Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="candidate-details.html">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="candidate-details.html">
                  <img src="assets/img/team/2.jpg" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="candidate-details.html">Valentine Anders</a></h4>
                <h5 class="sub-title">UI/UX Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="candidate-details.html">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="candidate-details.html">
                  <img src="assets/img/team/3.jpg" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="candidate-details.html">Shakia Aguilera</a></h4>
                <h5 class="sub-title">Web Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="candidate-details.html">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="candidate-details.html">
                  <img src="assets/img/team/4.jpg" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="candidate-details.html">Assunta Manson</a></h4>
                <h5 class="sub-title">App. Developer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="candidate-details.html">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
            </div>
            <!--== End Team Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Team Area Wrapper ==-->

    
              <!--== Add Swiper Arrows ==-->
              <div class="swiper-btn-wrap">
                <div class="brand-swiper-btn-prev">
                  <i class="icofont-long-arrow-left"></i>
                </div>
                <div class="brand-swiper-btn-next">
                  <i class="icofont-long-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area bg-color-gray">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">Our Happy Clients</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper testi-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/1.jpg" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Roselia Hamets</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/2.jpg" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Assunta Manson</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/3.jpg" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Amira Shepard</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/4.jpg" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Joshua George</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item">
                    <div class="testi-inner-content">
                      <div class="testi-author">
                        <div class="testi-thumb">
                          <img src="assets/img/testimonial/5.jpg" width="75" height="75" alt="Image-HasTech">
                        </div>
                        <div class="testi-info">
                          <h4 class="name">Rosie Patton</h4>
                          <span class="designation">Hiring Manager</span>
                        </div>
                      </div>
                      <div class="testi-content">
                        <p class="desc">It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                        <div class="rating-box">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
                      </div>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
              </div>

              <!--== Add Swiper Pagination ==-->
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Testimonial Area Wrapper ==-->

    

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
  

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