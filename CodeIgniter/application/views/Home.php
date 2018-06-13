<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Locka</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/Default-BS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/Default-BS/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/assets/Default-BS/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/assets/Default-BS/css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Locka</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#login">Login</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#signup">Signup</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#help">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <!-- <h1 class="text-uppercase mb-0">Log In</h1> -->
        <!-- <hr class="star-light"> -->
        <h2 class="font-weight-light mb-0">NYP Locker Rental</h2>
      </div>
    </header>

    <!-- Login Section -->
    <section class="login" id="login">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Login</h2>
        <hr class="star-dark mb-5">

        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">If you're an NYP Student, you can login as a Student using your Admin Number and Student Portal password.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">If you wish to login as a guest instead, please sign up below.</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#signup">
            <i class=""></i>
            Sign up as Guest
          </a>
        </div>
        
        <form name="sentMessage" id="contactForm" novalidate="novalidate">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Student ID/Username</label>
              <input class="form-control" id="name" type="text" placeholder="Admin Number/Username" required="required" data-validation-required-message="Please enter your Admin Number/Username.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Password</label>
              <input class="form-control" id="phone" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group" style="text-align: right;">
            <a href="Dashboard.php" class="btn btn-primary btn-xl" role="button">Login</a>
            <!--<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Login</button>-->
          </div>
        </form>
      </div>
    </section>

    <!-- Signup Section -->
    <section class="bg-primary text-white mb-0" id="signup">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Sign Up</h2>
        <hr class="star-light mb-5">
        <form name="sentMessage" id="contactForm" novalidate="novalidate" class="text-white">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>NRIC</label>
              <input class="form-control" id="nric" type="text" placeholder="NRIC" required="required" data-validation-required-message="Please enter your NRIC.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Name</label>
              <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Username</label>
              <input class="form-control" id="name" type="text" placeholder="Username" required="required" data-validation-required-message="Please enter your username.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Email Address</label>
              <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Phone Number</label>
              <input class="form-control" id="phone" type="number" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Password</label>
              <input class="form-control" id="password" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Confirm Password</label>
              <input class="form-control" id="passwordverify" type="password" placeholder="Enter password again" required="required" data-validation-required-message="Please enter your password again.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
              <button type="reset" class="btn btn-xl btn-outline-light" id="resetFormButton">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-xl btn-outline-light" id="sendMessage">Submit</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Help Section -->
    <section id="help">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Help</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <a href="AdminPanel/pages/login.html" class="btn btn-primary btn-xl" role="button">Administrator Login</a>
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Locka 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/assets/Default-BS/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/Default-BS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/assets/Default-BS/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/assets/Default-BS/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/assets/Default-BS/js/jqBootstrapValidation.js"></script>
    <script src="/assets/Default-BS/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/assets/Default-BS/js/freelancer.min.js"></script>

  </body>

</html>
