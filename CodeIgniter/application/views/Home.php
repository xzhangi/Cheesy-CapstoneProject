<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Locka</title>

  <!-- css -->
  <link href="assets/Default-BS/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/Default-BS/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="assets/Default-BS/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="assets/Default-BS/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="assets/Default-BS/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="assets/Default-BS/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="assets/Default-BS/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="assets/Default-BS/css/animate.css" rel="stylesheet" />
  <link href="assets/Default-BS/css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="assets/Default-BS/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="assets/Default-BS/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <!--<div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Hello</p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Whats Up</p>
            </div>
          </div>
        </div>
      </div>-->
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="assets/Default-BS/img/logo.png" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#intro">Login</a></li>
            <li><a href="#service">About Us</a></li>
            <li><a href="#doctor">Lockers</a></li>
            <li><a href="#facilities">Locations</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a><!--<span class="badge custom-badge red pull-right">Extra</span>-->
              <ul class="dropdown-menu">
                <li><a href="index.html">FAQ</a></li>
                <li><a href="index-form.html">Contact Us</a></li>
                <li><a href="application/views/adminpanel.php">Admin Login</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>


    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">NYP Locker Rental System</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <!--<h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>-->
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable Rental Rates</strong><br />Choose from hourly, weekly, monthly packages!</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Variety of Locker Sizes</strong><br />For your ever-changing needs!</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Lockers At Your Convenience</strong><br />Anywhere in campus!</span></li>
                  </ul>

                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="form-wrapper">
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                  <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>Sign Up As Guest <small>(It's free!)</small></h3>
                    </div>
                    <div class="panel-body">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>

                      <form action="" method="post" role="form" class="contactForm lead">
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" name="last_name" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                              <div class="validation"></div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Please enter a valid email">
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Phone number</label>
                              <input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                              <div class="validation"></div>
                            </div>
                          </div>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">

                        <p class="lead-footer">* We'll contact you by phone & email later</p>

                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-check fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Login/Signup</h4>
                <p>
                  Login using your NYP account or signup for a guest account.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Choose Your Locker</h4>
                <p>
                  Choose from a range of sizes, locations and pricing packages.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Make Payment</h4>
                <p>
                  Top up your eWallet and make payment. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Enjoy Your Locker</h4>
                <p>
                  Unlock your locker and voila!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>Any Questions? Any Issues?</h3>
                      <p>Check out our FAQ (Frequently Asked Questions).</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a href="#" class="btn btn-skin btn-lg">Frequently Asked Questions</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="assets/Default-BS/img/dummy/img-1.png" class="img-responsive" alt="" />
            </div>
          </div>
		  <div class="row>
		  <h5 class="h-light">Created by a group of students, we aim to improve the locker rental experience.
		  <br><br>We understand your struggle. We've all been there. Trying to lug your things home after a long day is no fun.
		  Especially if you have to bring it back the next day for your class.
		  <br><br>Locka aims to provide flexible rental experience with different sizes, packages all around campus. With our
		  user-friendly and simple booking process, anybody can get a locker anytime they need it. You don't have to pay
		  for a whole semester and only for when you need it.
		  <br><br>Now that we've made the locker rental process so easy for you, what are you still waiting for? Go get a locker now!
		  <br><br>- The Locka Team
		  </h5>
		  </div>
          <!--<div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Medical checkup</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-wheelchair fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Nursing Services</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-plus-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Pharmacy</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>


          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-h-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Gyn Care</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-filter fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Neurology</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-user-md fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Sleep Center</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>

          </div>

        </div>-->
      </div>
    </section>
    <!-- /Section: services -->


    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h3 class="h-bold">Lockers</h2>
                <p>Choose from a variety of sizes for your ever-changing needs!</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <!--<div id="filters-container" class="cbp-l-filters-alignLeft">
              <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".psychiatrist" class="cbp-filter-item">Psychiatrist (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".neurologist" class="cbp-filter-item">Neurologist (
                <div class="cbp-filter-counter"></div>)</div>
            </div>-->

            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
                <li class="cbp-item psychiatrist ">
                  <a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="assets/Default-BS/img/team/small.png" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW DETAILS</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Small</a>
                  <!--<div class="cbp-l-grid-team-position">Psychiatrist</div>-->
                </li>
                <li class="cbp-item cardiologist">
                  <a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="assets/Default-BS/img/team/medium.png" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW DETAILS</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Medium</a>
                  <!--<div class="cbp-l-grid-team-position">Cardiologist</div>-->
                </li>
                <li class="cbp-item cardiologist">
                  <a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                     <img src="assets/Default-BS/img/team/big.png" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW DETAILS</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Large</a>
                  <!--<div class="cbp-l-grid-team-position">Cardiologist</div>-->
                </li>
                <!--<li class="cbp-item neurologist">
                  <a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="assets/Default-BS/img/team/4.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                  <div class="cbp-l-grid-team-position">Neurologist</div>
                </li>-->

              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: team -->



    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h3 class="h-bold">Locations</h3>
                <p>Our lockers are all around campus for your convenience!</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item"><!--<a href="assets/Default-BS/img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="assets/Default-BS/img/works/1@2x.jpg">--><img src="assets/Default-BS/img/photo/sit.png" class="img-responsive" alt="img"></a></div>
                <div class="item"><!--<a href="assets/Default-BS/img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="assets/Default-BS/img/works/2@2x.jpg">--><img src="assets/Default-BS/img/photo/sidm.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><!--<a href="assets/Default-BS/img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="assets/Default-BS/img/works/3@2x.jpg">--><img src="assets/Default-BS/img/photo/scl.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><!--<a href="assets/Default-BS/img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="assets/Default-BS/img/works/4@2x.jpg">--><img src="assets/Default-BS/img/photo/sdn.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><!--<a href="assets/Default-BS/img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="assets/Default-BS/img/works/5@2x.jpg">--><img src="assets/Default-BS/img/photo/seg.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><!--<a href="assets/Default-BS/img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="assets/Default-BS/img/works/6@2x.jpg">--><img src="assets/Default-BS/img/photo/sbm.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><!--<a href="assets/Default-BS/img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="assets/Default-BS/img/works/6@2x.jpg">--><img src="assets/Default-BS/img/photo/shs.png" class="img-responsive " alt="img"></a></div>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: works -->


    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

      <div class="carousel-reviews broun-block">
        <div class="container">
          <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Love it!</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Love the convenience! Booked a locker for an hour for such an affordable rate.</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="assets/Default-BS/img/testimonials/girl.png" alt="" class="person img-circle" />
                      <a title="" href="#">Anna Tan</a>
                      <span>SIT</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Website is awesome :)</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span>
                        <span
                          data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Would be great if there was a mobile application specifically for this... but still great!</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="assets/Default-BS/img/testimonials/guy.png" alt="" class="person img-circle" />
                      <a title="" href="#">Ben Wong</a>
                      <span>SEG</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">This is the best.</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                      </div>
                      <p>This has made my life so much easier! No longer have to bring my lab coat home everyday!!</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="assets/Default-BS/img/testimonials/girl.png" alt="" class="person img-circle" />
                      <a title="" href="#">Angel Lim</a>
                      <span>SHS</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Pleasant experience!</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Forgot my pin and was able to change it easily! Thumbs up</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="assets/Default-BS/img/testimonials/guy.png" alt="" class="person img-circle" />
                      <a title="" href="#">Ahmad Ibrahim</a>
                      <span>SBM</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Well designed..</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span>
                        <span
                          data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Like that i can choose from different kinds of packages instead of renting for a semester! :)</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="assets/Default-BS/img/testimonials/girl.png" alt="" class="person img-circle" />
                      <a title="" href="#">Siti Aishah</a>
                      <span>SDN</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">So much convenience</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                      </div>
                      <p>Never knew having a locker was so much convenience!! I can even put my bag in it and go out for lunch.. This is awesome :)</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="assets/Default-BS/img/testimonials/guy.png" alt="" class="person img-circle" />
                      <a title="" href="#">Adam Tan</a>
                      <span>SIDM</span>
                    </div>
                  </div>
                </div>


              </div>

              <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: testimonial -->


    <!-- Section: pricing -->
    <section id="pricing" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h3 class="h-bold">Pricing</h3>
                <p>Choose from a variety of pricing packages!</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.1s">
              <div class="pricing-content general">
                <h2>Basic Fit 1 Package</h2>
                <h3>$33<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box featured-price">
            <div class="wow bounceInUp" data-wow-delay="0.3s">
              <div class="pricing-content featured">
                <h2>Golden Glow Package</h2>
                <h3>$65<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
                  <li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div class="pricing-content general last">
                <h2>Basic Fit 2 Package</h2>
                <h3>$47<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /Section: pricing -->

    <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Our partner</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="assets/Default-BS/img/dummy/partner-1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="assets/Default-BS/img/dummy/partner-2.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="assets/Default-BS/img/dummy/partner-3.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="assets/Default-BS/img/dummy/partner-4.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Medicio</h5>
                <p>
                  Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Information</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratory</a></li>
                  <li><a href="#">Medical treatment</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Medicio center</h5>
                <p>
                  Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@medicio.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - Medicio Theme. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="assets/Default-BS/js/jquery.min.js"></script>
  <script src="assets/Default-BS/js/bootstrap.min.js"></script>
  <script src="assets/Default-BS/js/jquery.easing.min.js"></script>
  <script src="assets/Default-BS/js/wow.min.js"></script>
  <script src="assets/Default-BS/js/jquery.scrollTo.js"></script>
  <script src="assets/Default-BS/js/jquery.appear.js"></script>
  <script src="assets/Default-BS/js/stellar.js"></script>
  <script src="assets/Default-BS/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="assets/Default-BS/js/owl.carousel.min.js"></script>
  <script src="assets/Default-BS/js/nivo-lightbox.min.js"></script>
  <script src="assets/Default-BS/js/custom.js"></script>
  <script src="assets/Default-BS/contactform/contactform.js"></script>

</body>

</html>
