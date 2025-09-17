<!DOCTYPE html>
<html lang="zxx">
<?php
  session_start();
?>
<?php
  include("inc/style.php")
?>

<body>

<!--wrapper start-->
<div class="wrapper">
  
  

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="login-register-form-wrap">
              <div class="login-register-form">
                <div class="form-title">
                  <h4 class="title">Log In</h4>
                </div>
                <form action="login_process.php" method="post">
                  <div class="row">
                    <div class="col-12">
                      <div>
                        <?php
               if( isset($_SESSION['global']))
                    {
                      echo '<p class="alert alert-danger">'.$_SESSION['global'].'</p>';
                      unset($_SESSION['global']);
                    }
                  ?>
                      </div>
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
                        <div class="remember-forgot-info">
                          <div class="remember">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Remember me</label>
                          </div>
                          <div class="forgot-password">
                            <a href="#/">Forgot Password?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">                                                                                                                                                
                      <div class="form-group">                        
                        <button type="submit" class="btn-theme">LOG IN</button>                                                                                                                                    
                      </div>
                    </div>
                  </div>
                </form>
                <div class="login-register-form-info">
                  <p>Don't you have an account? <a href="signup.php">Register</a></p>
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
  include("inc/script.php")
?>
</body>

</html>