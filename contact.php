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
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/slider/header1.png">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Contact Us</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Contact</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area contact-page-area">
      <div class="container">
        <div class="row contact-page-wrapper">
          <div class="col-lg-12">
            <div class="contact-info-wrap">
              <div class="info-item">
                <div class="icon">
                  <img src="assets/img/icons/c1.png" alt="Image" width="42" height="42">
                </div>
                <div class="info">
                  <h5 class="title">Call Us:</h5>
                  <p>
                    <p><a href="tel:+917984512238">+91 7984512238</a></p>
                  </p>
                </div>
              </div>
              <div class="info-item">
                <div class="icon">
                  <img src="assets/img/icons/c2.png" alt="Image" width="43" height="73">
                </div>
                <div class="info">
                  <h5 class="title">Email:</h5>
                  <p>
                     <p><a href="mailto:dss2108@gmail.com">dss2108@gmail.com</a></p>
                  </p>
                </div>
              </div>
              <div class="info-item">
                <div class="icon">
                  <img src="assets/img/icons/c3.png" alt="Image" width="36" height="46">
                </div>
                <div class="info">
                  <h5 class="title">Address:</h5>
                  <p>
                    shop no 4,5,6,7 <br>
                    nr. nageshwar derasr, <br>
                    jamnagar road, Rajkot
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <!--== Start Contact Form ==-->
            <div class="contact-form">
              <h4 class="contact-form-title">Get in Touch</h4>
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
                      <input class="form-control" type="text" placeholder="Subject:">
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
            </div>
            <!--== End Contact Form ==-->

            <!--== Message Notification ==-->
            <div class="form-message"></div>
          </div>
          <div class="col-lg-6">
           <div class="about-content">
                            <h3 class="title mb-3">Welcome to <span style="color:#ff6a00;">DSS – Door Step Services</span></h3>
                            <p class="mb-3">
                                At DSS, we believe in making your life easier by bringing professional 
                                <strong>home and lifestyle services</strong> directly to your doorstep. 
                                Whether it’s <strong>Car Wash, Carpentry, Plumbing, Elecronic, Cleaning, Fittings</strong> or other household needs, 
                                our skilled workers are just one booking away.
                            </p>
                            <p class="mb-3">
                                We pride ourselves on providing <strong>reliable, fast, and affordable</strong> services 
                                across multiple cities including <strong>Rajkot, Gandhinagar, Surat, Jamnagar, Gondal</strong> and more.
                            </p>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="feature-box mb-3">
                                        <h5 class="sub-title">✔ Wide Range of Services</h5>
                                        <p>From car washing to carpentry, plumbing, and more.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box mb-3">
                                        <h5 class="sub-title">✔ Doorstep Convenience</h5>
                                        <p>Book online, and our workers reach you directly.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box mb-3">
                                        <h5 class="sub-title">✔ Skilled Professionals</h5>
                                        <p>Trained workers to ensure quality service.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box mb-3">
                                        <h5 class="sub-title">✔ Multiple Cities</h5>
                                        <p>Expanding across Gujarat cities for your ease.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
   
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