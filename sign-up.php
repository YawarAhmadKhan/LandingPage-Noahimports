
<!DOCTYPE html>
    <html lang="en">


<!-- Mirrored from Noah Importscargo.link/sign-up.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:11:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <title>Register | Noah Imports - Pro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Courier Noah Imports-Integral Web System">
		<meta name="author" content="Jaomweb">
		<meta name="description" content="">
        <!-- favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="uploads/favicon.png">
        <!-- Bootstrap -->
        <link href="assets/theme_deprixa/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="assets/theme_deprixa/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Slider -->               
        <link rel="stylesheet" href="assets/theme_deprixa/css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="assets/theme_deprixa/css/owl.theme.css"/> 
        <link rel="stylesheet" href="assets/theme_deprixa/css/owl.transitions.css"/>  
        <!-- Main css --> 
        <link href="assets/theme_deprixa/css/style.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="assets/assets/js/jquery.js"></script>

        <!-- Style of the plugin -->
        <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
        <link rel="stylesheet" href="plugin/components/Font%20Awesome/css/font-awesome.min.css">


        <style>
            #example_2,
            #example_3,
            #example_4{
                display: none;
            }
        </style>

    </head>

<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
	<div class="container">
		<!-- Logo container-->
		<div class="logo-block-wrapper">
			<a class="logo"
				href="index.html"><img src="uploads/logo.png" alt="Noah Imports PRO"  width="171" height="44"/></a>
			
		</div>
		
		<!--end login button-->
		<!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div class="buy-button">
			<a href="sign-up.html" class="btn btn-light-outline rounded"><i class="mdi mdi-account-alert ml-3 icons"></i>
				Sign up</a>
		</div>

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                <li><a href="index.html" class="sub-menu-item">Home</a></li>

                <li><a href="aboutus.html" class="sub-menu-item">Company</a></li>

                <li><a href="tracking.html" class="sub-menu-item"><i class="mdi mdi-package-variant-closed"></i> Tracking</a></li>

                <li><a href="services-freight.html" class="sub-menu-item">Service</a></li>

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
	</div>
</header><!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="bg-signup bg-half-150 d-table w-100">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-5">
                                <div class="mr-lg-6">
                                    <div class="logoBanner">
            							<img src="assets/theme_deprixa/images/envios.png" class="img-fluid" alt="">
            						</div>   
                                </div>
                            </div>
								
                            <div class="col-lg-5 col-md-7 ">
								
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Register now!</h4>
										<p>Let's set up your account in just a couple of steps.</p>										
                                    </div>
									<div id="msgholder"></div>
									<div id="loader" style="display:none"></div>
									
                                    <form class="login-form" id="admin_form" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                               
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="Full name" name="fname">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                                
                                                    <label>Surname <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="Full surname" name="lname">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label>E-mail <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-mail-ru ml-3 icons"></i>
                                                    <input type="email" class="form-control pl-5" placeholder="Email" name="email" >
                                                </div>
                                            </div>
											<div class="col-md-6">
                                                <div class="form-group position-relative">                                               
                                                    <label>Username <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="Username" name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Password" name="pass">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" name="pass2" placeholder="Confirm Password">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="terms" value="yes" >
                                                        <label class="custom-control-label" for="customCheck1"> <a href="terms_and_conditions.html" class="text-primary"> You accept terms and conditions</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-primary rounded w-100" name="dosubmit">Register free</button>
												<input name="locker" type="hidden" value="" />
												<input name="doRegister" type="hidden" value="1" />
                                            </div>
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Do you already have an account?  </small> <a href="index.html" class="text-dark font-weight-bold">Sign in</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>

							
                            </div> <!--end col-->							
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

       <!--<a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a> -->
        <!-- Back to top -->

                 <!-- Footer Start -->
        <footer class="footer footer-bar">
            <div class="footer-py-30">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="text-sm-start">
                                <p class="mb-0"> © <script>document.write(new Date().getFullYear())</script> Powered by Coddingpro - All rights reserved <i class="mdi mdi-heart text-danger"></i> </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <ul class="list-unstyled footer-list terms-service mb-0">
                                <li class="list-inline-item mb-0"><a href="terms_and_conditions.html" class="text-foot me-2">Terms & Conditions</a></li>
                                <li class="list-inline-item mb-0"><a href="privacy_policy.html" class="text-foot me-2">Privacy Policy</a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->


        <!-- Plugin Start Whatsapp -->
        <div class="whatsapp_chat_support wcs_fixed_right" id="example_1">
            <div class="wcs_button_label">
                Questions? Lets chat
            </div>  
            <div class="wcs_button wcs_button_circle">
                <span class="fa fa-whatsapp"></span>
            </div>  

            <div class="wcs_popup">
                <div class="wcs_popup_close">
                    <span class="fa fa-close"></span>
                </div>
                <div class="wcs_popup_header">
                    <strong>Need help?</strong>
                    <br>
                    <div class="wcs_popup_header_description">Click to start the Chat</div>
                </div>  
                <div class="wcs_popup_person_container">
                    <div class="wcs_popup_person" data-number="#" data-availability='{"monday":"00:00-24:00", "tuesday":"00:00-24:00", "wednesday":"00:00-24:00", "thursday":"00:00-24:00", "friday":"00:00-24:00", "saturday":"00:00-24:00"}'>
                        <div class="wcs_popup_person_img"><img src="assets/theme_deprixa/images/icon-whatsapp/logo_wt.jpg" alt=""></div>
                        <div class="wcs_popup_person_content">
                            <div class="wcs_popup_person_name">Noah Imports pro</div>
                            <div class="wcs_popup_person_description">Sales support</div>
                            <div class="wcs_popup_person_status">I'm Online</div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <!-- Plugin Whatsapp End -->

            

        <!-- javascript -->
        <script src="assets/theme_deprixa/js/jquery-3.1.0.min.js"></script>
        <script src="assets/theme_deprixa/js/bootstrap.bundle.min.js"></script>
        <!-- SLIDER -->
        <script src="assets/theme_deprixa/js/tiny-slider.js"></script>
        <!-- Icons -->
        <script src="assets/theme_deprixa/js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="assets/theme_deprixa/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="assets/theme_deprixa/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

        <!-- Plugin JS file -->

        <script src="plugin/demo.js"></script>
        <script src="plugin/components/moment/moment.min.js"></script>
        <script src="plugin/components/moment/moment-timezone-with-data.min.js"></script>
        <script src="plugin/whatsapp-chat-support.js"></script>

        <script>
            $('#example_1').whatsappChatSupport();

            $('#example_2').whatsappChatSupport();

            $('#example_3').whatsappChatSupport({
                defaultMsg : '',
            });

            $('#example_4').whatsappChatSupport({
                defaultMsg : '',
            });

            
        </script>
       
    </body>


<!-- Mirrored from Noah Importscargo.link/sign-up.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:11:17 GMT -->
</html>        