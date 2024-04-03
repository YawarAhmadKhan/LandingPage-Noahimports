<?php
include "db/db.php";
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from Noah Importscargo.link/services-freight.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:05:54 GMT -->
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

        <!-- Jquery -->
        <script src="assets/theme_deprixa/js/jquery-3.1.0.min.js"></script>

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



<!-- Table serviceHeader -->
<?php
$sql = "SELECT * FROM serviceheader";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $htitle = $row['title'];

}
} else {
  echo "0 results";
}
?>
        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100" style="background: url('assets/theme_deprixa/images/company/aboutus.jpg');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading title-heading">
                            <h2 class="text-white title-dark"> <?php echo $htitle;?> </h2>
                            
                        </div>
                    </div><!--end col-->
                </div><!--end row--> 
            </div> <!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Start -->
        <section class="section">

            <div class="container">

                <div class="row">
                    <div class="col-md-4 mt-4 pt-2">
                        <ul class="nav nav-pills nav-justified flex-column bg-white rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">

                        <?php
                        $sql = "SELECT * FROM servicetabbutton";
                        $res = mysqli_query($con, $sql);
                        if(mysqli_num_rows($res) > 0){
                            while($row = mysqli_fetch_array($res)){
                                $btnId = $row['unique_id'];
                                ?>
                                    <li class="nav-item mt-2" id="<?php echo $btnId?>">
                                <a class="nav-link rounded">
                                    <div class="text-start py-1 px-2">
                                        <h6 class="mb-0"><?php echo $row['title'];?></h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->

                                <!-- Script For Toggle -->
<script>
$('#'+<?php echo $btnId?>).on('click',function(){
    var btnVal = $(this).attr("id");
    //Your code here
    $(".tabHide").hide();
    $("#tab-"+btnVal).show();
    // $(this).addClass("active");
    
    
});   
</script>

                                <?php
                            }
                        }
                        ?>

                        

                           
                            
                            
                            
                            
                            

                        </ul><!--end nav pills-->
                    </div><!--end col-->

                   <?php
                   // Get First ButtonID
                   $sql = "SELECT * FROM `servicetabdata` LIMIT 1";
                   $res = mysqli_query($con, $sql);
                   if(mysqli_num_rows($res) > 0){
                       while($row = mysqli_fetch_array($res)){
                           $fid = $row['buttonid'];
                       }
                   }
                   ?>

                    <div class="col-md-8 col-12 mt-4 pt-2">
                        <div class="tab-content" id="pills-tabContent">

                        <?php
                        

                        $sql = "SELECT * FROM servicetabdata";
                        $res = mysqli_query($con, $sql);
                        if(mysqli_num_rows($res) > 0){
                            while($row = mysqli_fetch_array($res)){
                                if($fid == $row['buttonid']){
                                    $status = "block";
                                }else{
                                    $status = "none";
                                }
                            ?>


                            <div class="tab-pane fade bg-white show active p-4 rounded shadow tabHide" id="tab-<?php echo $row['buttonid']?>" role="tabpanel" aria-labelledby="air-freight" style="display: <?php echo $status?>;">

<div class="row align-items-end mb-4 pb-2">
    <div class="col-md-12">
        <div class="section-title text-center text-md-start">
            <h6 class="text-primary">Services</h6>
            <h4 class="title mb-4"><?php echo $row['title'];?></h4>
        </div>
    </div><!--end col-->
</div><!--end row-->

<img src="uploads/<?php echo $row['image'];?>" class="img-fluid rounded shadow" alt="">
<div class="mt-4">
    <h5><?php echo $row['title'];?></h5>
    <p class="text-muted my-3"><?php echo $row['description'];?></p>

   
</div>
</div><!--end teb pane-->


                            <?php

                            }
                        }
                        ?>









                            

                          
                            
                          
                            
                        </div><!--end tab content-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <section class="bottome-banner bg-half-90 d-table w-100">
        <?php include "include/counter.php"?>
            
        </section><!--end section-->
        <!-- Hero End -->


<!-- Table servicelastbluesection -->
<?php
$sql = "SELECT * FROM servicelastbluesection";
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


<!-- Mirrored from Noah Importscargo.link/services-freight.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:06:04 GMT -->
</html>


