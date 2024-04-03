<?php include "db/db.php"?>

<!doctype html>
<html lang="en">

<!-- Mirrored from deprixa.link/version325/faq by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:40:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="dashboard/logo-image/image_logo0b30.png?id=2" />
    <title>DEPRIXA PRO 3.2.5 | Frequently Asked Questions</title>
    <meta name="description" content="                                 We are a leading company in service customer, paquete-ria internationally and throughout America. We provide immediate and safe solutions to all our customers through the modality of shipping door to door, for several countries of America, offering our clients a service of fast delivery and the best price of the market."
    />
    <meta name="keywords" content="                                 deprixa, courier, delivery, shipping, box, package, delivery express, invoices" />
    <meta name="author" content="Jaomweb">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/contactandfaq/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/contactandfaq/assets/css/responsive.css" />
    <link href="assets/theme_deprixa/css/style.css" rel="stylesheet" type="text/css" />

     <!-- Icons -->
     <link href="assets/theme_deprixa/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="../unicons.iconscout.com/release/v3.0.6/css/line.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">


    <style>
        .footer .footer-list li{
            display: inline-block!important;
        }
        a:hover{
            color: #4c1b8e;
        }
        .fa{
            font-family: 'FontAwesome';
        }
    </style>

</head>

<body class="faq-page left-sidebar">
    <div id="wrapper">

        <?php include "include/navbar.php"?>
        <!-- .site-header -->

        <main id="main" class="site-main">
            <section class="page-title" style="background-image: url(assets/contactandfaq/assets/images/placeholder/questions.jpg);">
                <div class="container">
                    <h1> Frequently Asked Questions</h1>
                </div>
                <!-- .container -->
            </section>
            <!-- .page-title -->

            <div class="container">
                <div class="row">
                    <div class="col-md-8 main-content">
                        <ul class="accordion first-open">

                            <?php
                            $sql = "SELECT * FROM faq";
                            $res = mysqli_query($con, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    ?>
                                    <li>
                                <h3 class="accordion-title"><a href="#"><?php echo $row['question'];?></a></h3>
                                <div class="accordion-content">
                                    <p><?php echo $row['answer'];?></p>
                                </div>
                            </li>
                                    <?php
                                }
                            }
                            ?>

                            

                        </ul>
                    </div>
                    <!-- .main-content -->

                    <div class="col-md-4 sidebar">
                        <aside class="widget contact-widget">
                            <ul class="contact-list">
                                <li>
                                    <div class="icons"><i class="ti ti-headphone-alt"></i></div>
                                    <h4>Phone</h4>
                                    <p><a href="#">(01) 123 456 789</a></p>
                                </li>
                                <li>
                                    <div class="icons"><i class="ti ti-map-alt"></i></div>
                                    <h4>Address</h4>
                                    <p>123 Fulham, London, SW6 1HS, United Kingdom</p>
                                </li>
                                <li>
                                    <div class="icons"><i class="ti ti-email"></i></div>
                                    <h4>Email</h4>
                                    <p><a href="mailto:contact@yourdomain.com">contact@yourdomain.com</a></p>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- .container -->
        </main>
        <!-- .site-main -->
        <a href="" onclick="topFunction()" style="background-color: #C2CADA; padding: 7px; position: absolute; z-index: 999; right: 30px;" class="rounded text-center"><i class="mdi mdi-chevron-up d-block"></i></a>

       

        <!-- Footer -->
        <!-- .footer -->
       
        <?php include "include/footer.php";
        include "include/whatsappPlugin.php";
        ?>

        <!-- site-footer -->
    </div>
    <!-- #wrapper -->

     <!-- javascript -->
        <!-- <script src="assets/theme_deprixa/js/jquery-3.1.0.min.js"></script> -->
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

    <!-- jQuery -->
    <script type="text/javascript" src="assets/contactandfaq/assets/js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="assets/contactandfaq/assets/css/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/contactandfaq/assets/css/libs/sticky/jquery.sticky.js"></script>
    <script type="text/javascript" src="assets/contactandfaq/assets/css/libs/owl.carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/contactandfaq/assets/css/libs/waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/contactandfaq/assets/css/libs/counterup/jquery.counterup.min.js"></script>

    <!-- orther script -->
    <script type="text/javascript" src="assets/contactandfaq/assets/js/main.js"></script>
    <script src="assets/contactandfaq/assets/js/jquery.validate.js"></script>
    <script src="../../kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>

    <script>
        $(document).ready(function() {
            // create DateTimePicker from input HTML element
            $("#datetimepicker").kendoDateTimePicker({
                value: new Date(),
                dateInput: true
            });
        });
    </script>
    <script type="text/javascript">
        function volumetrico() {

            var num2 = "1.341";
            var volume1 = document.getElementById("volume1");
            var volume2 = document.getElementById("volume2");
            var volume3 = document.getElementById("volume3");
            var input = document.getElementById("totalpeso");
            totalpeso = parseFloat(Math.round(volume1.value * volume2.value * volume3.value) / 6000).toFixed(1);
            input.value = totalpeso;

        }
    </script>

    <script>
        $.validator.setDefaults({
            submit: function() {
                alert("submitted!");
            }
        });

        $(document).ready(function() {
            $("#userForm").validate({
                rules: {
                    name: "required",
                    shipping: {
                        required: true,
                        minlength: 6
                    },

                },
                messages: {
                    name: "Please enter your name",
                    shipping: {
                        required: "Please enter a valid tracking number...",
                        minlength: "Your tracking number must consist of at least 13 characters"
                    },
                }
            });
        });

        $(document).ready(function() {
            $("#userForm2").validate({
                rules: {
                    name: "required",
                    shipping_online: {
                        required: true,
                        minlength: 6
                    },

                },
                messages: {
                    name: "Please enter your name",
                    shipping_online: {
                        required: "Please enter a valid tracking number...",
                        minlength: "Your tracking number must consist of at least 13 characters"
                    },
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#country3').on('change', function() {
                var countryID = $(this).val();
                if (countryID) {
                    $.ajax({
                        type: 'POST',
                        url: 'dashboard/ajaxpais2.php',
                        data: 'country_id=' + countryID,
                        success: function(html) {
                            $('#state3').html(html);
                            $('#city3').html('<option value="">City</option>');
                        }
                    });
                } else {
                    $('#state3').html('<option value="">state</option>');
                    $('#city3').html('<option value="">City</option>');
                }
            });

            $('#state3').on('change', function() {
                var stateID = $(this).val();
                if (stateID) {
                    $.ajax({
                        type: 'POST',
                        url: 'dashboard/ajaxpais2.php',
                        data: 'state_id=' + stateID,
                        success: function(html) {
                            $('#city3').html(html);
                        }
                    });
                } else {
                    $('#city3').html('<option value="">Select state first</option>');
                }
            });
        });




        $(document).ready(function() {
            $('#country1').on('change', function() {
                var countryID = $(this).val();
                if (countryID) {
                    $.ajax({
                        type: 'POST',
                        url: 'dashboard/ajaxpais1.php',
                        data: 'country_id=' + countryID,
                        success: function(html) {
                            $('#state1').html(html);
                            $('#city1').html('<option value="">City</option>');
                        }
                    });
                } else {
                    $('#state1').html('<option value="">State</option>');
                    $('#city1').html('<option value="">City</option>');
                }
            });

            $('#state1').on('change', function() {
                var stateID = $(this).val();
                if (stateID) {
                    $.ajax({
                        type: 'POST',
                        url: 'dashboard/ajaxpais1.php',
                        data: 'state_id=' + stateID,
                        success: function(html) {
                            $('#city1').html(html);
                        }
                    });
                } else {
                    $('#city1').html('<option value="">Select state first</option>');
                }
            });
        });

        $(document).ready(function() {
            $('#country2').on('change', function() {
                var countryID = $(this).val();
                if (countryID) {
                    $.ajax({
                        type: 'POST',
                        url: 'dashboard/ajaxpais.php',
                        data: 'country_id=' + countryID,
                        success: function(html) {
                            $('#state2').html(html);
                            $('#city2').html('<option value="">City</option>');
                        }
                    });
                } else {
                    $('#state2').html('<option value="">State</option>');
                    $('#city2').html('<option value="">City</option>');
                }
            });

            $('#state2').on('change', function() {
                var stateID = $(this).val();
                if (stateID) {
                    $.ajax({
                        type: 'POST',
                        url: 'dashboard/ajaxpais.php',
                        data: 'state_id=' + stateID,
                        success: function(html) {
                            $('#city2').html(html);
                        }
                    });
                } else {
                    $('#city2').html('<option value="">Select state first</option>');
                }
            });
        });
    </script>
    <!-- END PAGE LEVEL JS-->

    <script type="text/javascript" src="../dashboard/js/bootstrap-datetimepicker.html" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            //language:  'en',
            weekStart: 2,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 0,
            startView: 2,
            forceParse: 0,
            showMeridian: 3
        });
        $('.form_date').datetimepicker({
            language: 'en',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 0,
            startView: 1,
            minView: 0,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language: 'en',
            weekStart: 2,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 0,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
    </script>
</body>


<!-- Mirrored from deprixa.link/version325/faq by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:40:21 GMT -->

</html>
<!-- /Footer -->