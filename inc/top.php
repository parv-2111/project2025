
<header class="header-area transparent">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-start">
              <div class="header-logo-area">
                <a href="index.php">
                  <img class="logo-main" src="assets/img/logo-light.png" alt="Logo" />
                  <img class="logo-light" src="assets/img/logo-light.png" alt="Logo" />
                </a>
              </div>
            </div>
            <div class="header-align-center">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li><a href="index.php"><span>Home</span></a></li>
                  <li><a href="employers-"><span>Service Details</span></a></li>
                  <li class="has-submenu"><a href="candidate.php"><span>Candidates</span></a></li>
                   <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                    <ul class="submenu-nav">
                      <li><a href="about-us.php"><span>About us</span></a></li>
                      <li><a href="login.php"><span>Login</span></a></li>
                      <li><a href="registration.php"><span>Registration</span></a></li>
                  
                    </ul>
                  </li>
                  <li><a href="contact.php"><span>Contact</span></a></li>
                </ul>
              </div>
            </div>
            <div class="header-align-end">
              <div class="header-action-area">
                <a class="btn-registration">Hello,<?php echo $_SESSION['customer']['email'] ?></a>
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
