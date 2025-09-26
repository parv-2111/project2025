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
          <div class="slider-content-area" data-bg-img="assets/img/slider/header.png">
            <div class="container pt--0 pb--0">
              <div class="slider-container">
                <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-lg-8">
                    <div class="slider-content">
                      <h2 class="title"><span class="counter" data-counterup-delay="80">2,568</span> workers are available <br>You can choose your service</h2>
                      <p class="desc">Find Best Solutions And Workers For Fix Problems.</p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="job-search-wrap">
                      <div class="job-search-form">
                        <form action="#">
                          <div class="row row-gutter-10">
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Workers">
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <select class="form-control" id="city" name="city">
    <option value="0">Available Cities</option>
    <?php
        include("inc/conn.php");
        $city_q = "SELECT * FROM city WHERE city_status = 1";
        $city_res = mysqli_query($link, $city_q);
        while ($city_row = mysqli_fetch_assoc($city_res)) {
            $selected = '';
            if (isset($_SESSION['old']['city']) && $_SESSION['old']['city'] == $city_row['city_id']) {
                $selected = 'selected';
            }
            echo '<option value="'.$city_row['city_id'].'" '.$selected.'>'.$city_row['city_nm'].'</option>';
        }
    ?>
</select>

                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <select class="form-control" id="scat" name="scat">
        <option value="0">Available Services</option>
        <?php
          include("inc/conn.php");
          $cat_q="select * from category where cat_status=1";
          $cat_res=mysqli_query($link,$cat_q);
          while($cat_row=mysqli_fetch_assoc($cat_res)) {
            $selected = '';
            if(isset($_SESSION['old']['scat']) && $_SESSION['old']['scat'] == $cat_row['cat_id']) {
              $selected = 'selected';
            }
            echo '<option value="'.$cat_row['cat_id'].'" '.$selected.'>'.$cat_row['cat_nm'].'</option>';
          }
        ?>
      </select>
                              </div>
                            </div>
                            <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                              <div class="form-group">
                                <!-- Fav<button type="button" class="btn-form-search"><i class="icofont-search-1"></i></button> -->
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
                <p>We Fixes All Your House Holds</p>
              </div>
            </div>
          </div>
        </div>
        <?php
include("inc/conn.php");

// Get both id and name
$c_q = "SELECT cat_id, cat_nm FROM category";
$c_res = mysqli_query($link, $c_q);
?>

<div class="row row-gutter-20">
  <?php while ($c_row = mysqli_fetch_assoc($c_res)) { ?>
    <div class="col-sm-6 col-lg-3">
      <div class="job-category-item">
        <div class="content">
          <h3 class="title">
            <a href="worker-details.php?cat_id=<?php echo $c_row['cat_id']; ?>">
              <?php echo $c_row['cat_nm']; ?>
            </a>
          </h3>
        </div>
        <a class="overlay-link" href="worker-details.php?cat_id=<?php echo $c_row['cat_id']; ?>"></a>
      </div>
    </div>
  <?php } ?>
</div>

    </section>
    <!--== End Job Category Area Wrapper ==-->

    <!--== Start Recent Job Area Wrapper ==-->
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
                                            <a href="service-details.php?sid=<?= $row['s_id'] ?>"><?= $row['w_nm'] ?></a>
                                        </h4>
                                        <p class="address"><?= $row['cat_nm'] ?></p>
                                    </div>
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="service-details.php?sid=<?= $row['s_id'] ?>"><?= $row['s_nm'] ?></a>
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

    <!--== End Recent Job Area Wrapper ==-->


    

    
    <!--== Start Team Area Wrapper ==-->
    
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

    

    

  <!--== Start Footer Area Wrapper ==-->
  
      <?php
        include("inc/footer.php")
      ?>

  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>


<!--=======================Javascript============================-->

<?php
  include("inc/script.php");
?>

</body>

</html>