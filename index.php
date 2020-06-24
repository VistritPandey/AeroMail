#File:        index.php
#Purpose:     Building the website framework
#Author:      Artem Yakupow
#Date:        1 March, 2020
#Dependency:  style.css
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
    <link rel="stylesheet" type="text/css" href="style.css">
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
      <div>
      <header class="page-header header container-fluid">
      <div class="overlay"></div>
      <div class="description">
        <h1>Ground delivery in Philadelphia</h1>
        <p>Our platform offers reliable delivery service with efficiency in mind. 
          We are transforming extra space in people's cars into money for drivers 
          and quick delivery for senders.
        </p>

        <button class="btn btn-outline-secondary btn-lg" href="register.php">First Shipment is FREE</button>

        <button class="btn btn-outline-secondary btn-lg" href="register.php">New Driver Bonus $500</button>
        
      </header>
    </div>

    <!-- Columns -->
    <div class="container features">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Ground Delivery</h3>
          <img src="img/background3.png" class="img-fluid">
          <p>People are driving their cars and trucks all kinds of places, 
            our collaborative platform enabling drivers to utilize extra 
            cargo space in the vehicle. Front seat, rear seat, trunk, 
            or even truck bed spaces can be used depending on package size. 
            We are connecting people with packages to drivers going in the 
            same direction — fast, low-cost delivery for senders pays drivers 
            interested in extra income with minimal effort.</p>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Aerial Delivery</h3>
          <img src="img/background2.png" class="img-fluid">
          <p>We are developing an innovative On-Demand Drone Delivery service. 
            A simple idea of drone picking up the package from your doorstep and delivering 
            it in the shortest time ever becomes a reality with us. Small shipments 
            as a birthday gift to your friend or blood samples to the laboratory will never 
            be late again.</p>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Get in Touch!</h3>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address" name="email">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="4"></textarea>
          </div>
          <input type="submit" class="btn btn-secondary btn-block" value="Submit" name="signup_page"> 
        </div>
      </div> 
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