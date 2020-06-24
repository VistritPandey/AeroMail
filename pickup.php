#File:        pickup.php
#Purpose:     Creating the page through which a driver can choose his delivery
#Author:      Artem Yakupov
#Date:        2 June, 2020
#Dependency:  style2.css, pickup.css
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
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="pickup.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Overpass">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Overpass+Mono">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
      <header>
      <div class="container">
	<div class="row">

		<section class="content">
			<h1>Shipment management</h1>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="pagado">In Progress</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pending</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Canceled</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Upcoming</button>
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr data-status="pagado">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">February 13, 2016</span>
													<h4 class="title">
														John Wick
														<span class="pull-right pagado">(In Progress)</span>
													</h4>
													<p class="summary">Package picked up</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pendiente">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox3">
												<label for="checkbox3"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">February 13, 2016</span>
													<h4 class="title">
														John Wick
														<span class="pull-right pendiente">(Pending)</span>
													</h4>
													<p class="summary">Shipment awaiting conformation</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="cancelado">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox2">
												<label for="checkbox2"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">Febrero 13, 2016</span>
													<h4 class="title">
														John Wick
														<span class="pull-right cancelado">(Canceled)</span>
													</h4>
													<p class="summary">Shipment canceled</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pagado" class="selected">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox4" checked>
												<label for="checkbox4"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star star-checked">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">February 13, 2016</span>
													<h4 class="title">
														John Wick
														<span class="pull-right pagado">(Upcoming)</span>
													</h4>
													<p class="summary">Package confirmed, getting ready for shipping</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pendiente">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox5">
												<label for="checkbox5"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">February 13, 2016</span>
													<h4 class="title">
														John Wick
														<span class="pull-right pendiente">(Pending)</span>
													</h4>
													<p class="summary">Shipment awaiting conformation</p>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</div>
</div>
      </header>
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
    <script src="pickup.js"></script>
  </body>
</html>