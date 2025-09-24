
<header class="header-area transparent">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-start">
              <div class="header-logo-area">
                <a href="index.php">
                  <img class="logo-main" src="assets/img/logo_dss.png" alt="Logo" />
                  <img class="logo-light" src="assets/img/logo_dss.png" alt="Logo" />
                </a>
              </div>
            </div>
            <div class="header-align-center">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li><a href="index.php"><span>Home</span></a></li>
                  <li><a href="service.php"><span>Services</span></a></li>
                  <li class="has-submenu"><a href="worker.php"><span>Workers</span></a></li>
                   <li class="has-submenu"><a href="about-us.php"><span>About us</span></a></li>
                  <li><a href="contact.php"><span>Contact</span></a></li>
                </ul>
              </div>
            </div>
            <div class="header-align-end">
              <div class="header-action-area">
                <?php
                echo '<a class="btn-registration">Hello, ' . 
                    ($_SESSION['user_type'] == "customer" ? $_SESSION['customer']['email'] : $_SESSION['worker']['email']) . 
                      '</a>';
                ?>


                <a class="btn-registration" href="logout.php">LOG OUT</a>
                <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                  <i class="icofont-navigation-menu"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
