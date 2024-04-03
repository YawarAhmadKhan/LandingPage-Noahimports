<?php
include "db/db.php";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from Noah Importscargo.link/tracking.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:05:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <title>Track Shipment | Noah Imports - Pro</title>
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
        <link rel="stylesheet" href="../unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Main css --> 
        <link href="assets/theme_deprixa/css/style.css" rel="stylesheet" type="text/css" />
        <!-- tobii css -->
        <link href="assets/theme_deprixa/css/tobii.min.html" rel="stylesheet" type="text/css" />

        <!-- Style of the plugin -->
        <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
        <link rel="stylesheet" href="plugin/components/Font%20Awesome/css/font-awesome.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



        <style>
            #example_2,
            #example_3,
            #example_4{
                display: none;
            }
            .wcs_fixed_right{
    right: 45px!important;
}
        </style>

    </head>

<body>

<?php 
include "include/loader.php";
include "include/navbar.php";

?>

<!--Table  TrackingHeader -->
<?php
$sql = "SELECT * FROM trackingheader";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $hlogo = $row['image'];
}
} else {
  echo "0 results";
}

?>
<!-- Hero Start -->
<section class="bg-tracking bg-half-150 d-table w-100">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 col-md-5">
	                    <div class="mr-lg-6">
	                        <div class="logoBanner">
								<img src="uploads/<?php echo $hlogo;?>" class="img-fluid" alt="">
							</div>   
	                    </div>
	                </div>
                    
                    <div class="col-lg-5 col-md-5 order-2 order-md-2 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="login-page bg-white shadow rounded p-4">
                            <div class="text-center">
                                <h4 class="mb-4">Check the location and </span> <br> status of your shipments.<span class="text-primary">.</span></h4>  
                            </div>
							<form class="login-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12">
										<div class="form-group position-relative">
											<label>Tracking Deorixa Pro.<span class="text-primary">.</span></label>
											<i class="mdi mdi-cube-send ml-3 icons"></i>
											<textarea name="order_inv" placeholder="Enter your Shipping/Tracking/Guide Number. Ej: (AWB-00000000001"  id="comments" rows="4" class="form-control pl-5" required></textarea>
										</div>
									</div>
									
                                        <div class="col-sm-12 text-center">
                                      
                                            <button type="submit" name="submit" class="btn btn-primary rounded w-100"><i class="mdi mdi-cube-outline ml-3 icons"></i> Search Now!</button>
                                        </div><!--end col-->
                                   
                                </div>
                            </form>
                        </div><!---->
                    </div> <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </div>
    </div>
</section><!--end section-->


<!--Table  TrackingUnderHeader -->
<?php
$sql = "SELECT * FROM trackingunderheader";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $unhtitle1 = $row['title1'];
     $unhtitle2 = $row['title2'];
     $unhimage = $row['image'];

}
} else {
  echo "0 results";
}
?>
<!-- Hero Start -->
<section class="bottome-banner bg-half-150 d-table w-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 order-2 order-md-1">
                <div class="title-heading mt-2 ms-lg-5">
                    <h3 class="heading mb-3"><?php echo $unhtitle1;?> <span class="text-danger"><strong><?php echo $unhtitle2;?></strong></span></h3>
                    
                </div>
            </div><!--end col-->
            <div class="col-lg-5 col-md-5 order-1 order-md-2 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <img src="uploads/<?php echo $unhimage;?>" class="img-fluid" alt="">
            </div>
        </div><!--end row-->
    </div><!--end container--> 
</section><!--end section-->
<!-- Hero End -->

<section class="bg-half-150 d-table w-100">
<?php include "include/counter.php"?>
</section><!--end section-->
<!-- Hero End -->



<!--Table LastBlueSection -->
<?php
$sql = "SELECT * FROM trackinglastbluesection";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $lbsimage = $row['image'];

}
} else {
  echo "0 results";
}
?>
<!-- Hero Start -->
<section class="banner-blue bg-half-10 d-table w-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6 order-2 order-md-1">
				<div class="title-heading text-center mt-1">
				
					<h3 class="headingbg mb-1 text-white">We have the best rates</h3>
					<?php include "include/ratesTable.php"?>
				</div>

			</div>

			<div class="col-lg-6 col-md-6 order-1 order-md-2 mt-0 pt-0 mt-sm-0 pt-sm-0">
				<img src="uploads/<?php echo $lbsimage;?>" class="img-fluid" alt="">
			</div>
		</div>

	</div>
</section><!--end section-->
<!-- Hero End -->


<a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top"> 
    <i class="mdi mdi-chevron-up d-block"> </i> 
</a>
<!-- Back to top -->

<?php include "include/footer.php";
include "include/whatsappPlugin.php";
?>



       
            

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


<!-- Mirrored from Noah Importscargo.link/tracking.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:05:54 GMT -->
</html>