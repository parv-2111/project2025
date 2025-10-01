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

                    // Pagination setup
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $limit = 8; // workers per page
                    
                    if($page < 1) $page = 1;
                    $offset = ($page - 1) * $limit;
                    
                    // Get total workers count
                    $countQuery = "SELECT COUNT(*) AS total FROM service";
                    $countRes = mysqli_query($link, $countQuery);
                    $countRow = mysqli_fetch_assoc($countRes);
                    $total_workers = $countRow['total'];
                    $total_pages = ceil($total_workers / $limit);
                    
                    // Fetch workers with limit
                    $q = "SELECT * FROM service s 
                          INNER JOIN category c ON s.s_cat = c.cat_id
                          ORDER BY s.s_id DESC 
                          LIMIT $offset, $limit";
                    $res = mysqli_query($link, $q);
                    
                    while($row = mysqli_fetch_assoc($res)){
                    ?>
                        <!--== Worker Item ==-->
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="team-item">
                                <div class="content">
                                    <h4 class="title">
                                        <a href="service-details.php?sid=<?= $row['s_id'] ?>"><?= $row['w_nm'] ?></a>
                                    </h4>
                                    <h5 class="sub-title"><?= $row['s_nm'] ?></h5>
                                    <p class="desc">
                                        Phone: <?= $row['w_phone'] ?><br>
                                        Price: ₹<?= $row['s_price'] ?><br>
                                        Experience: <?= $row['w_experience'] ?> Years <br>
                                        Location: <?= $row['s_location'] ?>
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

                <!-- Pagination -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-area">
                            <nav>
                                <ul class="page-numbers d-inline-flex">
                                    <!-- Previous Page -->
                                    <?php if($page > 1): ?>
                                        <li>
                                            <a class="page-number prev" href="?page=<?= ($page-1) ?>">
                                                <i class="icofont-long-arrow-left"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <!-- Page Numbers -->
                                    <?php for($i = 1; $i <= $total_pages; $i++): ?>
                                        <li>
                                            <a class="page-number <?= ($i == $page) ? 'active' : '' ?>" href="?page=<?= $i ?>">
                                                <?= $i ?>
                                            </a>
                                        </li>
                                    <?php endfor; ?>

                                    <!-- Next Page -->
                                    <?php if($page < $total_pages): ?>
                                        <li>
                                            <a class="page-number next" href="?page=<?= ($page+1) ?>">
                                                <i class="icofont-long-arrow-right"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
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
