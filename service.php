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
                    <?php
                    include("inc/conn.php");

                    $q = "SELECT * FROM service s 
                          INNER JOIN category c ON s.s_cat = c.cat_id
                          ORDER BY s.s_id DESC";
                    $res = mysqli_query($link, $q);

                    while($row = mysqli_fetch_assoc($res)){
                    ?>
                        <!--== Service Item ==-->
                        <div class="col-md-6 col-lg-4">
                            <div class="recent-job-item">
                                <div class="company-info">
                                    <div class="logo">
                                        <a href="service-details.php?sid=<?= $row['s_id'] ?>">
                                            <img src="service_img/<?= $row['s_img'] ?>" width="75" height="75" alt="<?= $row['s_nm'] ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="name">
                                            <a href="service-details.php?sid=<?= $row['s_id'] ?>"><?= $row['s_nm'] ?></a>
                                        </h4>
                                        <p class="address"><?= $row['cat_nm'] ?></p>
                                    </div>
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="service-details.php?sid=<?= $row['s_id'] ?>"><?= $row['w_nm'] ?></a>
                                    </h3>
                                    <p class="desc">
                                        Location: <?= $row['s_location'] ?><br>
                                        Phone: <?= $row['w_phone'] ?><br>
                                        Experience: <?= $row['w_experience'] ?> Years<br>
                                        Price: ₹<?= $row['s_price'] ?>
                                    </p>
                                </div>
                                <div class="recent-job-info">
                                    <a class="btn-theme btn-sm" href="service-details.php?sid=<?= $row['s_id'] ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
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
