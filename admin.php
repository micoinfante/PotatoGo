<?php
session_start();
?>

<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="PotaTo Go">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="#POTATO-logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Potato Go</title>
  <link rel="stylesheet" href="assets/bs4/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/potatogo/css/style.css">
  <link rel="stylesheet" href="assets/potatogo-slider/style.css">
  <link rel="stylesheet" href="assets/potatogo-gallery/style.css">
  <link rel="stylesheet" href="assets/potatogo/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="login.css" type="text/css">
  <script src="assets/bs4/js/bootstrap.min.js"></script>
  <script src="assets/jquery/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>
 <section class="ptg-navbar ptg-navbar--freeze ptg-navbar--sticky ptg-navbar--auto-collapse" id="menu-20">
      <div class="ptg-navbar__section ptg-section" id="home">
          <div class="ptg-section__container container">
              <div class="ptg-navbar__container">
                  <div class="ptg-navbar__column ptg-navbar__column--s ptg-navbar__brand">
                      <span class="ptg-navbar__brand-link ptg-brand ptg-brand--inline">
                          <span class="ptg-brand__logo">
                            <a href="index.html">
                              <img class="ptg-navbar__brand-img ptg-brand__img" src="assets/images/Potato-logo.png" alt="Potato-Go">
                            </a>
                          </span>
                          <span class="ptg-brand__name">
                            <a class="ptg-brand__name text-white" href="index.html">POTATO GO Admin</a>
                          </span>
                      </span>
                  </div>

                  <div class="ptg-navbar__hamburger ptg-hamburger text-white"><span class="ptg-hamburger__line"></span></div>
                  <div class="ptg-navbar__column ptg-navbar__menu">
                      <nav class="ptg-navbar__menu-box ptg-navbar__menu-box--inline-right">
                          <div class="ptg-navbar__column">
                            <ul class="ptg-navbar__items ptg-navbar__items--right ptg-buttons ptg-buttons--freeze ptg-buttons--right btn-decorator ptg-buttons--active">
                              <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="index.html">Home</a></li>
                                <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="menu.html">Menu</a></li>
                            <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="reviews.html">Reviews</a></li>
                              <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="about.html">About</a></li>
                              <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="contact.html">Contact</a></li>

                            </ul>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </section> <!-- end of nav-->


  <section>
    <div class="container" id="modal-login" tabindex="" role="dialog" aria-labelledby="modal-login" aria-hidden="">
    <div class=" " role="document" style="padding-top:100px;">
      <div class="">

                <div class="login-register-form-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                        <li><a href="#register" data-toggle="tab">Register</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="login">
                            <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                                <div class="form-group " >
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" name="login_email" class="form-control" placeholder="Username or email" required="required" value="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input type="password" name="login_pass" class="form-control" placeholder="Password" required="required">
                                    </div>
                                </div>

                                <!-- <a href="dashboard.html"> -->
                                  <input name="btnLogin" type="submit" value="Login" class="btn btn-success btn-custom" >
                                <!-- </a> -->

                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="register">
                            <form class="form-horizontal" method="post" action="menu.html">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" name="register_username" class="form-control" placeholder="Username" required="required" value="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                        <input type="text" name="register_fullname" class="form-control" placeholder="Full name" required="required" value="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" name="register_email" class="form-control" placeholder="Email" required="required" value="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                        <input type="password" name="register_password" class="form-control" placeholder="Password" required="required">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                        <input type="password" name="register_cpassword" class="form-control" placeholder="Confirm Password" required="required">
                                    </div>
                                </div>
                                <input type="submit" value="Register" class="btn btn-success btn-custom">
                            </form>
                        </div>
                    </div>
                </div>



      </div>
    </div>
  </div>
  </section><!-- end of login-->



<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="assets/smooth-scroll/SmoothScroll.js"></script>
<script src="assets/jarallax/jarallax.js"></script>
<script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
<script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/social-likes/social-likes.js"></script>
<script src="assets/potatogo/js/script.js"></script>
<script src="assets/potatogo-gallery/script.js"></script>
</body>
</html>
