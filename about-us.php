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
    include("inc/style.php");
?>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Header Wrap per ==-->
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
              <h2 class="title">About Us</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>About Us</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area about-default-wrapper">
      <div class="container">
        <div class="about-item">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="about-thumb" data-aos="fade-down" data-aos-duration="1000">
                <img src="assets/img/about/1.jpg" alt="Image-HasTech">
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="about-thumb about-thumb-two" data-aos="fade-down" data-aos-duration="1200">
                <img src="assets/img/about/2.jpg" alt="Image-HasTech">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-content" data-aos="fade-down" data-aos-duration="1000">
                <h4 class="sub-title">// About Finate</h4>
                <h3 class="title">Finate help your for get your dream job and build your bright career.</h3>
                <p class="desc">It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to using 'Content publishing packages web page editors.</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Funfact Area Wrapper ==-->
    <section class="funfact-area bg-color-gray">
      <div class="container">
        <div class="row no-gutter">
          <div class="col-12">
            <div class="funfact-content-wrap">
              <div class="funfact-col">
                <!--== Start Funfact Item ==-->
                <div class="funfact-item" data-aos="fade-down">
                  <h2 class="counter-number"><span class="counter" data-counterup-delay="50">5689</span></h2>
                  <h6 class="counter-title">Total Jobs</h6>
                </div>
                <!--== End Funfact Item ==-->
              </div>
              <div class="funfact-col">
                <!--== Start Funfact Item ==-->
                <div class="funfact-item" data-aos="fade-down" data-aos-duration="1500">
                  <h2 class="counter-number"><span class="counter" data-counterup-delay="50">8567</span></h2>
                  <h6 class="counter-title">Candidates</h6>
                </div>
                <!--== End Funfact Item ==-->
              </div>
              <div class="funfact-col">
                <!--== Start Funfact Item ==-->
                <div class="funfact-item" data-aos="fade-down" data-aos-duration="1700">
                  <h2 class="counter-number"><span class="counter" data-counterup-delay="50">7457</span></h2>
                  <h6 class="counter-title">Resume</h6>
                </div>
                <!--== End Funfact Item ==-->
              </div>
              <div class="funfact-col">
                <!--== Start Funfact Item ==-->
                <div class="funfact-item" data-aos="fade-down" data-aos-duration="1900">
                  <h2 class="counter-number"><span class="counter" data-counterup-delay="50">6483</span></h2>
                  <h6 class="counter-title">Compnay’s</h6>
                </div>
                <!--== End Funfact Item ==-->
              </div>
              <div class="funfact-col">
                <!--== Start Funfact Item ==-->
                <div class="funfact-item" data-aos="fade-down" data-aos-duration="2200">
                  <h2 class="counter-number"><span class="counter" data-counterup-delay="50">358</span></h2>
                  <h6 class="counter-title">Country’s</h6>
                </div>
                <!--== End Funfact Item ==-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Funfact Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    <section class="team-area team-inner-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" data-aos="fade-down">
              <h3 class="title">Best Candidate</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-down">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="thumb">
                <a href="worker-details.php">
                  <img src="assets/img/team/1.jpg" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="worker-details.php">Lauran Benitez</a></h4>
                <h5 class="sub-title">Web Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="worker-details.php">View Profile</a>
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
                <a href="worker-details.php">
                  <img src="assets/img/team/2.jpg" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="worker-details.php">Valentine Anders</a></h4>
                <h5 class="sub-title">UI/UX Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="worker-details.php">View Profile</a>
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
                <a href="worker-details.php">
                  <img src="assets/img/team/3.jpg" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="worker-details.php">Shakia Aguilera</a></h4>
                <h5 class="sub-title">Web Designer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="worker-details.php">View Profile</a>
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
                <a href="worker-details.php">
                  <img src="assets/img/team/4.jpg" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="worker-details.php">Assunta Manson</a></h4>
                <h5 class="sub-title">App. Developer</h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                <a class="btn-theme btn-white btn-sm" href="worker-details.php">View Profile</a>
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

    
    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" data-aos="fade-down">
              <h3 class="title">Our Happy Clients</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12" data-aos="fade-down">
            <div class="swiper testi-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Testimonial Item ==-->
                  <div class="testimonial-item testimonial-style2-item">
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
                  <div class="testimonial-item testimonial-style2-item">
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
                  <div class="testimonial-item testimonial-style2-item">
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
                  <div class="testimonial-item testimonial-style2-item">
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
                  <div class="testimonial-item testimonial-style2-item">
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
    <!--== Start Footer Top ==-->

    <!--== Start Footer Main ==-->
    <?php
      include("inc/footer.php")
    ?>  
    <!--== End Footer Main ==-->

   
  </footer>
  <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>
  

<!--=======================Javascript============================-->

<?php
  include("inc/script.php")
?>

</body>

</html>