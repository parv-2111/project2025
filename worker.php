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

                    <?php
                    include("inc/conn.php");

                    $q = "SELECT * FROM service s 
                          INNER JOIN category c ON s.s_cat = c.cat_id
                          ORDER BY s.s_id DESC";
                    $res = mysqli_query($link, $q);

                    while($row = mysqli_fetch_assoc($res)){
                    ?>
                        <!--== Worker Item ==-->
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="team-item">
                                <div class="thumb">
                                    <a href="service-details.php?sid=<?= $row['s_id'] ?>">
                                        <img src="service_img/<?= $row['s_img'] ?>" width="160" height="160" alt="<?= $row['w_nm'] ?>">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        <a href="service-details.php?sid=<?= $row['s_id'] ?>"><?= $row['w_nm'] ?></a>
                                    </h4>
                                    <h5 class="sub-title"><?= $row['s_nm'] ?></h5>
                                    <p class="desc">
                                        Phone: <?= $row['w_phone'] ?><br>
                                        Price: ₹<?= $row['s_price'] ?><br>
                                        Experience: <?= $row['w_experience'] ?> Years
                                    </p>
                                    <a class="btn-theme btn-white btn-sm" href="service-details.php?sid=<?= $row['s_id'] ?>">Book Now</a>
                                </div>
                                <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Bookmark"></div>
                                <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Bookmark"></div>
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
