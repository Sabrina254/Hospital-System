<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="META data " content="This is the content that will be shown frothe data that will bereferenced by all of te metataggs">
    <meta name="second" content="searching">
    <title>Hospital</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive+Mono">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gentium+Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Petit+Formal+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tenali+Ramakrishna">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Timmana">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap1.css">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap2.css">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap3.css">
    <link rel="stylesheet" href="assets/css/Analog_Clock.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v11.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v111.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v112.css">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="assets/css/Dropdown-Login-with-Social-Logins.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-2.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-1.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navbar-Fixed-Side.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/sidebar1.css">
    <link rel="stylesheet" href="assets/css/Sortable-filter-gallery-portfolio.css">
    <link rel="stylesheet" href="assets/css/Sortable-filter-gallery-portfolio1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
<link rel="icon" 
      type="image/png" 
      href="assets/img/Hospital-128.png">
<title>Hospitals Management .</title>
</head>

<body style="background-image:url(&quot;assets/img/pexels-photo-433267.jpeg&quot;);">
    <div>
        <form id="form" style="font-family:Quicksand, sans-serif;background-color:rgba(34,30,42,0.65);width:320px;padding:40px;" action="verification.php" method="post">
		                          <?php
                            if(isset($_GET['errorMessage'])){
	                                 echo "<div class=\"alert alert-danger\">
                                        <strong>Warning!</strong> The username and password donot match.
                                      </div>";
                            }

                          ?>
            <h2 id="head" style="color:rgb(88,222,55);font-family:Times New Roman;"><strong>LOGIN&nbsp;</strong></h2>
            <div style="text-align:center;"><img class="rounded-circle img-fluid" src="assets/img/download (1).png" id="image" style="width:auto;height:auto;"></div>
            <div class="form-group"><label for="from-phone" style="font-family:Times New Roman;"><strong>User Name :</strong></label><span class="required-input">*</span>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input class="form-control" type="text" name="fName" required="" placeholder="User Name ." id="fName"></div>
            </div>
            <div class="form-group"><label for="from-phone" style="font-family:Times New Roman;"><strong>Password</strong></label><span class="required-input">*</span>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key"></i></span></div><input class="form-control" type="text" name="password" required="" placeholder="Password" id="fName"></div>
            </div><button class="btn btn-success" type="submit" id="butonas" style="width:100%;height:100%;margin-bottom:10px;background-color:rgb(18,217,14);font-family:Times New Roman;color:rgb(255,255,255);"><strong>LOG IN&nbsp; &nbsp; &nbsp;&nbsp;</strong><i class="fa fa-unlock" style="font-size:32px;"></i></button>
            <a
                href="#" id="linkas" style="font-size:12px;margin:auto;margin-left:0;margin-right:0;margin-bottom:0;margin-top:0;padding-left:0;padding-right:0;color:rgb(177,151,70);">Forgot your e mail or password?</a>
        </form>
    </div>
    <div>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-info navigation-clean-button" style="background-color:rgb(10,57,222);">
            <div class="container"><a class="navbar-brand" href="index.html" id="brandInSmall" style="font-family:Times New Roman;"><i class="fa fa-stethoscope" style="font-size:42px;color:rgb(226,22,22);"></i>&nbsp; &nbsp; Hospital System.</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="color:rgb(11,12,12);font-size:20px;font-family:Times New Roman;"><strong>Home .</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="about.html" style="color:rgb(0,0,0);font-size:20px;font-family:Times New Roman;"><strong>About </strong>.</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contacts.html" style="color:rgb(1,1,1);font-size:20px;font-family:Times New Roman;"><strong>Contacts.</strong></a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:rgb(0,0,0);font-size:20px;font-family:Times New Roman;"><strong>Locations</strong></a>
                            <div class="dropdown-menu"
                                role="menu"><a class="dropdown-item" role="presentation" href="locations.html"><strong>Nairobi</strong></a><a class="dropdown-item" role="presentation" href="locations.html"><strong>Mombasa</strong></a><a class="dropdown-item" role="presentation"
                                    href="locations.html"><strong>Kisumu</strong></a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a href="login.php" class="login" style="color:rgba(55,60,184,0.9);font-family:Times New Roman;"><strong>Patient Log In</strong></a><a class="btn btn-info action-button" role="button" href="sighnup.php" data-bs-hover-animate="bounce">Sign Up</a></span></div>
            </div>
        </nav>
    </div>
    <footer class="footer" style="background-color:#1aa0be;">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">Hospital Management .</a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Feedback.</a><strong> · </strong><a href="#">Locations</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p
                    class="company-name" style="color:rgb(255,255,255);">Hospital Management System. © 2019</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Consolidated Biulding 23 Floor</span> Upper Hill , Nairobi , Kenya.</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +254792107437</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank" style="color:rgb(3,97,252);">management@management.t</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about ourDedics">
                <h4>Site Created and Maintained By :&nbsp;</h4>
                <h5><strong>JohKariMo Developers</strong></h5>
                <p style="color:rgb(255,255,255);"> A software comapny dedicated to meet All Your Software needs. Contact us or visit us for more to do with development of Web Applications , Android Apps , &nbsp;Home Automatio etc .</p>
                <div class="social-links social-icons"><a href="facebook.com"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery2.js"></script>
    <script src="assets/js/Analog_Clock.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/DashBoard-light-boostrap1.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/Dashboard-layout-v11.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/DashBoard-light-boostrap.js"></script>
    <script src="assets/js/new.js"></script>
    <script src="assets/js/DashBoard-light-boostrap3.js"></script>
    <script src="assets/js/DashBoard-light-boostrap2.js"></script>
    <script src="assets/js/Sortable-filter-gallery-portfolio.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/passwordValidation.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>

</html>