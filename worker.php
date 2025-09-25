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
                            <h2 class="title">Worker</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb justify-content-center">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Worker</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Team Area Wrapper ==-->
        <section class="team-area team-inner2-area">
            <div class="container">
                <div class="row">

                    <!--== Worker 1 ==-->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <div class="thumb">
                                <a href="service-details.php">
                                    <img src="assets/img/team/1.jpg" width="160" height="160" alt="Worker Image">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="service-details.php">Lauran Benitez</a></h4>
                                <h5 class="sub-title">Web Designer</h5>
                                <p class="desc">
                                    Phone: 9876543210<br>
                                    Price: ₹5000<br>
                                    Experience: 3 Years
                                </p>
                                <a class="btn-theme btn-white btn-sm" href="service-details.php">Read More</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
                        </div>
                    </div>

                    <!--== Worker 2 ==-->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <div class="thumb">
                                <a href="service-details.php">
                                    <img src="assets/img/team/2.jpg" width="160" height="160" alt="Worker Image">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="service-details.php">Valentine Anders</a></h4>
                                <h5 class="sub-title">UI/UX Designer</h5>
                                <p class="desc">
                                    Phone: 9876543211<br>
                                    Price: ₹6000<br>
                                    Experience: 4 Years
                                </p>
                                <a class="btn-theme btn-white btn-sm" href="service-details.php">Read More</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
                        </div>
                    </div>

                    <!--== Worker 3 ==-->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <div class="thumb">
                                <a href="service-details.php">
                                    <img src="assets/img/team/3.jpg" width="160" height="160" alt="Worker Image">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="service-details.php">Shakia Aguilera</a></h4>
                                <h5 class="sub-title">Web Designer</h5>
                                <p class="desc">
                                    Phone: 9876543212<br>
                                    Price: ₹5500<br>
                                    Experience: 2 Years
                                </p>
                                <a class="btn-theme btn-white btn-sm" href="service-details.php">Read More</a>                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
                        </div>
                    </div>

                    <!--== Worker 4 ==-->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <div class="thumb">
                                <a href="service-details.php">
                                    <img src="assets/img/team/4.jpg" width="160" height="160" alt="Worker Image">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="service-details.php">Assunta Manson</a></h4>
                                <h5 class="sub-title">App. Developer</h5>
                                <p class="desc">
                                    Phone: 9876543213<br>
                                    Price: ₹7000<br>
                                    Experience: 5 Years
                                </p>
                                <a class="btn-theme btn-white btn-sm" href="service-details.php">Read More</a>                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
                        </div>
                    </div>

                    <!--== You can continue this pattern for more workers ==-->

                </div>

                <!--== Pagination ==-->
                <!-- <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-area">
                            <nav>
                                <ul class="page-numbers d-inline-flex">
                                    <li><a class="page-number active" href="worker.php">1</a></li>
                                    <li><a class="page-number" href="worker.php">2</a></li>
                                    <li><a class="page-number" href="worker.php">3</a></li>
                                    <li><a class="page-number next" href="worker.php"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> -->

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
