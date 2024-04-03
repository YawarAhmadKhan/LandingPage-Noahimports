<?php
include "db/db.php";
?>        
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from Noah Importscargo.link/terms_and_conditions.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:11:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <title>Login | Noah Imports - Pro</title>
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

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



        <style>
            #example_2,
            #example_3,
            #example_4{
                display: none;
            }
        </style>

    </head>

<body>

<?php 
include "include/loader.php";
include "include/navbar.php";

?>
        
        <!-- Hero Start -->
        <section class="bg-half-150 bg-light d-table w-100">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading">
                            <h4 class="title mb-0"> Terms of Conditions </h4>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
                
                <div class="position-breadcrumb">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                            <li class="breadcrumb-item"><a href="#">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Terms</li>
                        </ul>
                    </nav>
                </div>
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->  
        
        <!-- Start Terms & Conditions -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="card shadow border-0 rounded">
                            <div class="card-body">
                                <?php
                                $sql = "SELECT * FROM termscondition";
                                $res = mysqli_query($con, $sql);
                                if(mysqli_num_rows($res) > 0){
                                    while($row = mysqli_fetch_array($res)){
                                        $data = $row['data'];
                                    }
                                }
                            
                                ?>

                                <p><?php echo $data;?></p>

                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Terms & Conditions -->

       <!--<a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a> -->
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


<!-- Mirrored from Noah Importscargo.link/terms_and_conditions.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:11:20 GMT -->
</html>