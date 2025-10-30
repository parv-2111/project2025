
<!DOCTYPE html>
<?php
  session_start();
?>  
<html lang="zxx">

<?php
        include("inc/style.php");
?>

<body>


  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-7 col-xl-6">
            <div class="login-register-form-wrap register-form-wrap">
              <div class="login-register-form">
                <div class="form-title">
                  <h4 class="title">Register Now</h4>
                </div>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="candidate-tab" data-bs-toggle="pill" data-bs-target="#candidate" type="button" role="tab" aria-controls="candidate" aria-selected="true"><i class="icofont-businessman"></i>Customer</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="employer-tab" data-bs-toggle="pill" data-bs-target="#employer" type="button" role="tab" aria-controls="employer" aria-selected="false"><i class="icofont-bag-alt"></i>Worker</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">


                    
                  <form action="signup_cus_process.php" method="Post">
                      <div class="row">
                        <div class="col-12">
                          <div>
                            <?php
                            if( isset($_SESSION['message']))
                                 {
                                   echo '<p class="alert alert-success">'.$_SESSION['message'].'</p>';
                                   unset($_SESSION['message']);
                                  }
                                   ?>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="name" name="cnm" placeholder="Full Name">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="md-5" name="pwd" placeholder="Password">
                          </div>
                        </div>
                       <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="tel" name="mno" placeholder="Contact Number">
                          </div>
                       </div>
                        
                        <div class="col-12">
                          <div class="form-group">
                            <button type="submit" class="btn-theme">Register Now</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">




                  <form action="signup_work_process.php" method="Post">
                      <div class="row">
                        <div class="col-12">
                          <?php
                          if (isset($_SESSION['message'])) {
                            echo '<p class="alert alert-success">'.$_SESSION['message'].'</p>';
                            unset($_SESSION['message']);
                          }
                            ?>

                          <div class="form-group">
                            <input class="form-control" type="name" name="enm" placeholder="Full Name">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="password" name="pwd" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="tel" name="mno" placeholder="Contact Number">
                          </div>
                          <div class="col-12">
                          <div class="form-group">
                            <select class="form-control" name="cat" required>
                              <option value="" disabled selected>Work as ...  </option>
                                <?php 
                                    include("inc/conn.php");

                                    $q = "SELECT cat_nm FROM category";
                                    $res = mysqli_query($link, $q);

                                    while($row = mysqli_fetch_assoc($res)) {
                                      echo '<option value="'.$row['cat_nm'].'">'.$row['cat_nm'].'</option>';
                                    }
                                ?>
                            </select>
                          </div>
                        </div>
                        </div>
                        
                        <div class="col-12">
                          <div class="form-group">
                            <button type="submit" class="btn-theme">Register Now</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="login-register-form-info">
                  <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Login Area Wrapper ==-->
  </main>

  

<!--=======================Javascript============================-->

<?php
        include("inc/script.php");
?>


</body>

</html>