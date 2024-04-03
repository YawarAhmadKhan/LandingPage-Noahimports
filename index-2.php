<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from deprixacargo.link/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:11:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <title>Login | Deprixa - Pro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Courier DEPRIXA-Integral Web System"> 
		<meta name="author" content="Jaomweb">
		<meta name="description" content="">
        <!-- favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="uploads/favicon.png">
        <!-- Bootstrap -->
        <link href="assets/theme_deprixa/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="assets/theme_deprixa/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="../unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Main css --> 
        <link href="assets/theme_deprixa/css/style.css" rel="stylesheet" type="text/css" />
        <!-- tobii css -->
        <link href="assets/theme_deprixa/css/tobii.min.html" rel="stylesheet" type="text/css" />

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
				href="index.html"><img src="uploads/logo.png" alt="DEPRIXA PRO"  width="171" height="44"/></a>
			
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
<section class="bg-home bg-half-150 d-table w-100">
	<div class="home-center">
		<div class="home-desc-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-8 order-1 order-md-1">
						<div class="row align-items-center">
				            <div class="col-lg-7 col-md-7 order-1 order-md-2">
				                <div class="title-headingbg mt-1 ms-lg-5">
				                    <h3 class="headingbg mb-3 text-white">Shipping <br><span class="text-white">Ocean and  Air Freight<br> <strong>FROM CHINA</strong></span></h3>
				                    
				                </div>
				            </div><!--end col-->
				            <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
				                <img src="assets/theme_deprixa/images/envios.png" class="img-fluid" alt="">
				            </div>
				        </div><!--end row-->
					</div>
					<div class="col-lg-4 col-md-4 order-2 order-md-2 mt-4 pt-2 mt-sm-0 pt-sm-0">
						<div class="login-page bg-white shadow rounded p-4">
							<div class="text-center">
								<!-- <h4 class="mb-4"><//?php echo $core->site_name ?>, <//?php echo $lang['left114'] ?></h4>  -->
								<h4 class="mb-4"> Login</h4>
							</div>
							<div id="msgholder2">
								
							</div>
							<div id="loader" style="display:none"></div>
							<form class="login-form" method="post" name="login_form" id="login-form">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group position-relative">
											<label>Username <span
													class="text-danger">*</span></label>
											<i class="mdi mdi-account ml-3 icons"></i>
											<input type="text" class="form-control pl-5"
												placeholder="Username" name="username"
												id="username" required="">
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group position-relative">
											<label>Password <span
													class="text-danger">*</span></label>
											<i class="mdi mdi-key ml-3 icons"></i>
											<input type="password" class="form-control pl-5"
												placeholder="Password" name="password"
												id="password" required="">
										</div>
									</div>

									<div class="col-lg-12">
										<p class="float-right forgot-pass"><a href="forgot-password.html"
												class="text-dark font-weight-bold">Did you forget your password</a>
										</p>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck1">
												<label class="custom-control-label"
													for="customCheck1">Remember me</label>
											</div>
										</div>
									</div>
									<div class="col-lg-12 mb-0">
										<button
											class="btn btn-primary rounded w-100">Get in</button>
										<input name="doLogin" type="hidden" value="1" />
									</div>
									<br><br>
									<div class="col-12 text-center">
										<p class="mb-0 mt-3"><small
												class="text-dark mr-2">You do not have an account?</small> <a
												href="sign-up.html"
												class="text-dark font-weight-bold">Sign up</a>
										</p>
										<img class="lang-img"
											src="assets/theme_deprixa/images/language-icon.png"
											class="img-fluid" alt="">

									</div>
								</div>
							</form>
						</div>
						<!---->
					</div>
					<!--end col-->
				</div>
				<!--end row-->
			</div>
			<!--end container-->
		</div>
	</div>


</section>
<!--end section-->

<!-- Hero Start -->
<section class="bottome-banner bg-half-150 d-table w-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 order-1 order-md-2">
                <div class="title-heading mt-2 ms-lg-5">
                    <h3 class="heading mb-3">Buy, send and bring with us <span class="text-danger"><strong>EASY, FAST AND SAFE</strong></span></h3>
                    
                </div>
            </div><!--end col-->
            <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <img src="assets/theme_deprixa/images/recurso9.png" class="img-fluid" alt="">
            </div>
        </div><!--end row-->
    </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->


<section class="bottome-banner bg-half-150 d-table w-100">
    <div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-8 col-md-8 order-1 order-md-2">
				<div class="title-heading text-center mt-1">
				
					<h3 class="heading mb-1 text-violet">We have the best rates</h3>
					<table class="pricing-table">
						<tr>
							<th>DESTINY </th>
							<th>OCEAN CARGO <span> (CUBIC FOOT) </span></th>
							<th>AIR CARGO <span> (POUND) </span></th>
						</tr>
						
						<tr>
							<td>CHINA - PANAMA</td>

							<td>From $15</td>
							<td>From $16</td>
						</tr>
						<tr>
						  <td>China-Venezuela</td>
						  <td>From $25</td>
						  <td>From $16</td>
						</tr>
						<tr>
						  <td>Panama-Venezuela</td>
						  <td>From $17</td>
						  <td>From $4,50</td>
						</tr>
					</table>
				</div>
			</div>

		</div>
	 </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->


<!-- Hero Start -->
<section class="banner-blue bg-half-10 d-table w-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 order-2 order-md-1">
                <div class="title-headingbg mt-2 ms-lg-5">
                    <h3 class="headingbg mb-3">Buy in the main stores in china <span class="heading text-warning"><strong>AND RECEIVE AT THE DOOR OF YOUR HOUSE</strong></span></h3>
                    
                </div>
            </div><!--end col-->
            <div class="col-lg-5 col-md-5 order-1 order-md-2 mt-0 pt-0 mt-sm-0 pt-sm-0">
                <img src="assets/theme_deprixa/images/phone_store.png" class="img-fluid" alt="">
            </div>
        </div><!--end row-->
    </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->

<!-- Hero End -->




<!-- Back to top -->
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
                            <div class="wcs_popup_person_name">Deprixa pro</div>
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


<!-- Mirrored from deprixacargo.link/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:11:49 GMT -->
</html>