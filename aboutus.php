<?php
include "db/db.php";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from Noah Importscargo.link/aboutus.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:04:55 GMT -->
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


<!-- Table AboutHeader -->
<?php
$sql = "SELECT * FROM aboutheader";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $htitle = $row['title'];
      $hpara = $row['paragraph'];
}
} else {
  echo "0 results";
}
?>
        <!-- Hero Start -->
        <section class="bg-half-150 d-table w-100" style="background: url('assets/theme_deprixa/images/company/aboutus.jpg');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading title-heading">
                            <h2 class="text-white title-dark"> <?php echo $htitle;?> </h2>
                            <p class="text-white-50 para-desc mb-0 mx-auto"><?php echo $hpara;?></p>
                        </div>
                    </div><!--end col-->
                </div><!--end row--> 
                
                <div class="position-breadcrumb">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                            <li class="breadcrumb-item"><a href="#">Company</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Aboutus</li>
                        </ul>
                    </nav>
                </div>
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


<!-- Table aboutunderheader-->
<?php
$sql = "SELECT * FROM aboutunderheader";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $uhimage = $row['image'];
    $uhyear = $row['year'];
    $uhtitle = $row['title'];
    $uhpara = $row['paragraph'];
    $uhbtntitle = $row['btntext'];
    $uhbtnurl = $row['btnurl'];  
}
} else {
  echo "0 results";
}
?>
        <section class="section">
            <div class="container">
                <div class="row align-items-center" id="counter">
                    <div class="col-md-6">
                        <img src="uploads/<?php echo $uhimage;?>" class="img-fluid" alt="">
                    </div><!--end col-->

                    <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="ms-lg-4">
                            <div class="d-flex mb-4">
                                <span class="text-primary h1 mb-0"><span class="counter-value display-1 fw-bold" data-target="<?php echo $uhyear;?>"><?php echo $uhyear;?></span>+</span>
                                <span class="h6 align-self-end ms-2">Years <br> Experience</span>
                            </div>
                            <div class="section-title">
                                <h4 class="title mb-4"><?php echo $uhtitle;?></h4>
                                <p class="text-muted"><?php echo $uhpara;?></p>
                                <a href="<?php echo $uhbtnurl;?>" class="btn btn-primary mt-3"><?php echo $uhbtntitle;?></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-4">
                <div class="row justify-content-center">
                    
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->


        <!-- Table aboutsteptext -->
        <?php
        $sql = "SELECT * FROM aboutsteptext";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $steptexttitle1 = $row['title1'];
            $steptexttitle2 = $row['title2'];
            $steptextpara = $row['paragraph'];
        }
        } else {
          echo "0 results";
        }
        ?>


        <section style="background-color: #F8F9FC; padding-top: 50px; padding-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM aboutwhynoha";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        $whytitle = $row['title'];
                        $whydesc = $row['description'];
                      }
                    } else {
                      echo "0 results";
                    }
                    
                    ?>
                    <div class="col-md-12">
                        <h1 style="text-align: center; color: #28006D;"><?php echo $whytitle;?></h1>
                        <p style="text-align: center; color: #9392AE;"><?php echo $whydesc;?></p><br>
                        <div class="conBtn" style="text-align: center;">
                        

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" style="background-color: white;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h6 class="text-primary"><?php echo $steptexttitle1?></h6>
                            <h4 class="title mb-4"><?php echo $steptexttitle2?></h4>
                            <p class="text-muted para-desc mx-auto mb-0"><?php echo $steptextpara?></p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">

                <?php
                $sql = "SELECT * FROM aboutsteps ORDER BY id DESC LIMIT 1";
                $result = $con->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $lastId = $row['id'];
                  }
                } else {
                  echo "0 results";
                }
                ?>

                <!-- Table AboutSteps -->
                <?php
                $sql = "SELECT * FROM aboutsteps";
                $result = $con->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      $stepId = $row['id'];
                      $absttitle = $row['title'];
                      $abstpara = $row['paragraph'];
                      $abstimage = $row['image'];

                      if($stepId != $lastId){
                          $processClass = 'work-process';
                      }else{
                        $processClass = '';
                      }

                      ?>
<div class="col-md-4 mt-4 pt-2">
                        <div class="card features feature-clean <?php echo $processClass?> bg-transparent process-arrow border-0 text-center">
                            <div class="icons text-primary text-center mx-auto">
                                <i class="uil uil-presentation-edit d-block rounded h3 mb-0">
                                    <img src="uploads/<?php echo $abstimage;?>" width="60px" alt="">
                                </i>
                            </div>

                            <div class="card-body">
                                <h5 class="text-dark"><?php echo $absttitle;?></h5>
                                <p class="text-muted mb-0"><?php echo $abstpara;?></p>
                            </div>
                        </div>
                    </div><!--end col-->
                      <?php
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    
                    
                    
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

        </section><!--end section-->


        <section class="bg-half-150 d-table w-100" style="background-color: #F8F9FC;">
            <?php include "include/counter.php"?>
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


<!-- Mirrored from Noah Importscargo.link/aboutus.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:05:54 GMT -->
</html>