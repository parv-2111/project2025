<?php
session_start();

if(! isset($_SESSION['admin']['status']))
{
  header("location:login.php");
  exit;
}
?> 
 
 
 
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> 
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
         <li><a class="nav-link" href="#" role="button">Hi,<?php echo $_SESSION['admin']['email']; ?></a></li>
        
        <li><a class="nav-link" href="logout.php" role="button">Log Out</a></li>
     
    </ul>
  </nav>