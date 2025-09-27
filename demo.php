<?php
session_start();
include("inc/conn.php");

// Check if service ID is set
if(!isset($_GET['sid']) || empty($_GET['sid'])){
    $_SESSION['error'] = "No service selected!";
    header("Location: service-details.php");
    exit;
}

$sid = intval($_GET['sid']);

// Fetch service details
$q = "SELECT s.*, c.cat_nm FROM service s 
      LEFT JOIN category c ON s.s_cat=c.cat_id 
      WHERE s.s_id='$sid' LIMIT 1";
$res = mysqli_query($link, $q);

if(!$res || mysqli_num_rows($res) == 0){
    $_SESSION['error'] = "Service not found!";
    header("Location: service-list.php");
    exit;
}

$s_row = mysqli_fetch_assoc($res);

// Handle booking form submission
if(isset($_POST['book_now'])){
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
    $message = mysqli_real_escape_string($link, $_POST['message']);

    $b_q = "INSERT INTO service_booking (s_id, name, email, phone, message, booking_time) 
            VALUES ('$sid', '$name', '$email', '$phone', '$message', NOW())";

    if(mysqli_query($link, $b_q)){
        $_SESSION['success'] = "Service booked successfully! Our worker will contact you soon.";
        header("Location: service-detail.php?sid=".$sid);
        exit;
    } else {
        $_SESSION['error'] = "Booking failed! Please try again.";
        header("Location: service-detail.php?sid=".$sid);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("inc/style.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include("inc/navbar.php"); ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DSS ADMIN PANEL</span>
    </a>
    <?php include("inc/sidebar.php"); ?>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= htmlspecialchars($s_row['s_nm']); ?> Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><?= htmlspecialchars($s_row['s_nm']); ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <!-- Success/Error Message -->
        <?php
          if(isset($_SESSION['success'])){
              echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
              unset($_SESSION['success']);
          }
          if(isset($_SESSION['error'])){
              echo '<p class="alert alert-danger">'.$_SESSION['error'].'</p>';
              unset($_SESSION['error']);
          }
        ?>

        <div class="row">
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header"><h3 class="card-title"><?= htmlspecialchars($s_row['s_nm']); ?> Details</h3></div>
              <div class="card-body">
                <p><strong>Category:</strong> <?= htmlspecialchars($s_row['cat_nm']); ?></p>
                <p><strong>Price:</strong> <?= htmlspecialchars($s_row['s_price']); ?></p>
                <p><strong>Description:</strong> <?= htmlspecialchars($s_row['s_desc']); ?></p>
                <p><strong>Responsibility:</strong> <?= htmlspecialchars($s_row['s_response']); ?></p>
                <p><strong>Benefit:</strong> <?= htmlspecialchars($s_row['s_benefit']); ?></p>
                <p><strong>Worker Name:</strong> <?= htmlspecialchars($s_row['w_nm']); ?></p>
                <p><strong>Worker Phone:</strong> <?= htmlspecialchars($s_row['w_phone']); ?></p>
                <p><strong>Experience:</strong> <?= htmlspecialchars($s_row['w_experience']); ?> Years</p>
                <img src="../service_img/<?= $s_row['s_img']; ?>" width="200">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-success">
              <div class="card-header"><h3 class="card-title">Book This Service</h3></div>
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                  </div>
                  <div class="form-group">
                    <label for="message">Details / Requirements</label>
                    <textarea class="form-control" id="message" name="message" required></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="book_now" class="btn btn-primary">Book Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>

  <?php include("inc/copyright.php"); ?>

  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<?php include("inc/script.php"); ?>
</body>
</html>
