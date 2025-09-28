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
                        <div class="page-header-content text-center">
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

        <!--== Start About Section ==-->
        <section class="about-area py-5">
            <div class="container">
                <div class="row align-items-center">
                    
                    <!-- Left Side: Text -->
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

                    <!-- Right Side: Image -->
                    <div class="col-lg-6">
                        <div class="about-image text-center">
                            <img src="assets/img/slider/header.png" alt="About DSS" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End About Section ==-->

        <!--== Start Mission & Vision Section ==-->
        <section class="mission-area py-5 bg-light">
            <div class="container">
                <div class="row text-center mb-4">
                    <div class="col-12">
                        <h3 class="title">Our Mission & Vision</h3>
                        <p class="desc">What drives DSS – Door Step Services forward</p>
                    </div>
                </div>

                <div class="row">
                    <!-- Mission -->
                    <div class="col-md-6">
                        <div class="card shadow-sm p-4 h-100">
                            
                            <h4 class="sub-title">Our Mission</h4>
                            <p>
                                To simplify everyday living by connecting people with trusted 
                                service providers at their doorstep, ensuring quality, 
                                reliability, and convenience with every booking.
                            </p>
                        </div>
                    </div>

                    <!-- Vision -->
                    <div class="col-md-6">
                        <div class="card shadow-sm p-4 h-100">
                            
                            <h4 class="sub-title">Our Vision</h4>
                            <p>
                                To become Gujarat’s most trusted doorstep service platform, 
                                expanding to every city, making professional help 
                                accessible and affordable to every household.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Mission & Vision Section ==-->

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
