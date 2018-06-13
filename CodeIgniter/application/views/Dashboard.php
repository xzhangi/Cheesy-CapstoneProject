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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Div1">Unlock</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Div2">Find</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Div3">Booking History</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Div4">Report</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Log Out</a>
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
        <h2 class="font-weight-light mb-0">NYP Locker Rental - Dashboard</h2>
      </div>
    </header>

    <!-- Unlock Section -->
    <section class="Div1" id="Div1">
      <div class="container" style="height: 600px;">
        <h2 class="text-center text-uppercase text-secondary mb-0">Unlock a Locker</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-md-4 mx-auto" style="text-align: center">
				<br />
				<h3>Location</h3>
				<br />
				<select>
					<?php
						foreach($lockerlist as $lockerItem)
						{
					?>
						<option value="<?php echo $lockerItem->LockerID; ?>"><?php echo $lockerItem->Name; ?></option>
					<?php
						}
					?>
				</select>
				<br />
			</div>
			<div class="col-md-4 mx-auto" style="text-align: center">
				<br />
				<h3>Locker / Size</h3>
				<br />
				<select>
					<?php
						foreach($lockerlist as $lockerItem)
						{
					?>
						<option value="<?php echo $lockerItem->LockerID; ?>"><?php echo $lockerItem->Name; ?></option>
					<?php
						}
					?>
				</select>
				<br />
			</div>
			<div class="col-md-4 mx-auto" style="text-align: center">
				<br />
				<h3>Duration</h3>
				<br />
				<select>
					<?php
						foreach($lockerlist as $lockerItem)
						{
					?>
						<option value="<?php echo $lockerItem->LockerID; ?>"><?php echo $lockerItem->Name; ?></option>
					<?php
						}
					?>
				</select>
				<br />
            </div>
			<div class="mx-auto" style="text-align: center">
				<br />
				<br />
				<button type="reset" class="btn btn-primary btn-xl" id="bookLockerButton" style="margin-top:50px;">Book!</button>
			</div>
          </div>
      </div>
    </section>

    <!-- Signup Section -->
    <section class="bg-primary text-white mb-0" id="Div2">
      <div class="container"  style="height: 600px;">
        <h2 class="text-center text-uppercase text-white">Find a Locker</h2>
        <hr class="star-light mb-5">
        <div style="text-align:center">
          <input type="text" class="form-control" placeholder="Search by Area" size="25"> <br /><br />
          <p>This is the area where the user can search for the lockers</p>
        </div>
        <div class="row">
          <div class="col-lg-8-mx-auto">
          </div>
        </div>
      </div>
    </section>

    <!-- Help Section -->
    <section id="Div3">
      <div class="container"  style="height: 600px;">
        <h2 class="text-center text-uppercase text-secondary mb-0">Booking History</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div style="text-align:center">
              <input type="text" class="form-control" placeholder="Report ID" size="25"> <br /><br />
              <p>View user's booking history here</p>
            </div>
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          </div>
        </div>
      </div>
    </section>

    <!-- Help Section -->
    <section id="Div4">
      <div class="container"  style="height: 600px;">
        <h2 class="text-center text-uppercase text-secondary mb-0">Report</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div style="text-align:center">
              <input type="text" class="form-control" placeholder="Report ID" size="25"> <br /><br />
              <p>User can report an issue/locker/user here</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
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
