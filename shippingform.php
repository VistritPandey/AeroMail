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
    <link rel="stylesheet" type="text/css" href="shippingform.css">
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
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Ship your package</h3>
                <p>You complete the form with all the required information, we take care of the shipping process!</p>
            </div>
            <form action="send_order.php" method="POST" class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                        <h3 class="register-heading">Shipping Form</h3>
                        <h4 class="personalinfo">Sender Information</h4>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="senderfirst" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="senderlast" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="senderemail" class="form-control" placeholder="Sender Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="senderphone" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Sender Phone *" value="" />
                                </div>
                              </div>
                            </div>
                                
                            <h4 class="otherinfo">Recipient Information</h4>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="recipientfirst" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="recipientlast" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="recipientemail" class="form-control" placeholder="Recipient Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="recipientphone" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Recipient Phone *" value="" />
                                </div>
                              </div>
                            </div>
                            <h4 class="otherinfo">Package Information</h4>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="pickupaddress" class="form-control" placeholder="Pick-up Address *" value="" />
                                </div>
                                <div class="form-group">
                                  <select class="form-control">
                                      <option class="hidden" name="quantity"  selected disabled>Select the number of packages</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <input type="text" name="size" class="form-control" placeholder="Indicative Sizes *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" name="destinationaddress" class="form-control" placeholder="Destination Address *" value="" />
                              </div>
                              <div class="form-group">
                                <input type="text" name="description" class="form-control" placeholder="Description *" value="" />
                              </div>
                              <div class="form-group">
                                <input type="text" name="weight" class="form-control" placeholder="Total weight *" value="" />
                              </div>
                              
                                <a href="orderconf.php"><input type="submit" class="btnRegister"  value="Submit"/></a>
                            </div>
                        </div>  
                      </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
              </form>
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
