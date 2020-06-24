<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: senderslogin.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'aeromail';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT email, firstname, lastname, phone, password FROM senders WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($email, $firstname, $lastname, $phone, $password);
$stmt->fetch();
$stmt->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Overpass">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Overpass+Mono">
    <title>AeroMail</title>
  </head>
  <body>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-md">
          <a class="navbar-brand" href="index.php">
            <img src="img/aeromail_white_logo.png" height="40" alt="">
          </a>
          <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shippingform.php">Ship</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pickup.php">Pickup</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tracking.php">Tracking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutpage.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutteam.php">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faqpage.php">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="investors.php">Investors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="support.php">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
            </ul>
            
          </div>
        </nav>

      <!-- Header -->
      <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                <?=$_SESSION['name']?>
                                </h5>
                                <h6>
                                  Sender
                                </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?=$_SESSION['name']?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>First Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?=$firstname?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?=$lastname?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email Address</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?=$email?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?=$phone?></p>
                                        </div>
                                    </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>           
    </div>
 

    <!-- Footer -->
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
      <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
      <p>Turn trips into extra cash delivering with AeroMale. Earn up to $60 on local 
        deliveries and up to $650 on longer hauls. Join our platform for drivers 
        who earn money driving to places they’re already going.</p>
      <p>Or invest in your own delivery drones employed on our platform and make money 
        while your birds flying.</p>
        <input type="submit" class="btn btn-secondary btn-block" value="Sign up to drive" 
        name="sign_up_driver">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <p>3675 Market St 10th floor, Philadelphia, PA 19104
      <br/>info@aeromail.com
      <br/>+ 1 267 902 0345
      <br/>+ 1 267 902 1420</p>
    </div>
  </div>
  <div class="footer-copyright text-center">© 2020 Copyright: AeroMail.com</div>
</footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
