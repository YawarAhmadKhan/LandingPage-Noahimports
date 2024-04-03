<?php
include "db/db.php";
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from Noah Importscargo.link/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:04:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Noah Imports</title>
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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Main css -->
  <link href="assets/theme_deprixa/css/style.css" rel="stylesheet" type="text/css" />
  <!-- tobii css -->
  <link href="assets/theme_deprixa/css/tobii.min.html" rel="stylesheet" type="text/css" />
  <link href="assets/theme_deprixa/css/tobii.min.html" rel="stylesheet" type="text/css" />
  <link href="assets/theme_deprixa/css/tobii.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/theme_deprixa/css/tiny-slider.css" rel="stylesheet" type="text/css" />

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Style of the plugin -->
  <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
  <link rel="stylesheet" href="plugin/components/Font%20Awesome/css/font-awesome.min.css">


  <style>
    #example_2,
    #example_3,
    #example_4 {
      display: none;
    }

    .tns-nav {
      display: none;
    }

    .clip-text {
      font-size: 190px;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .clip-text.clip-text-image {
      background-image: url("uploads/01.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .wcs_fixed_right {
      right: 45px !important;
    }

    @media (max-width: 1024px) {
      .clip-text {
        font-size: 180px;
      }
    }

    @media (max-width: 768px) {
      .clip-text {
        font-size: 135px;
      }
    }

    @media (max-width: 425px) {
      .clip-text {
        font-size: 50px;
      }
    }

    /* Partners Slider */
    @-webkit-keyframes scroll {
      0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }

      100% {
        -webkit-transform: translateX(calc(-250px * 7));
        transform: translateX(calc(-250px * 7));
      }
    }

    @keyframes scroll {
      0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }

      100% {
        -webkit-transform: translateX(calc(-250px * 13));
        transform: translateX(calc(-250px * 13));
      }
    }

    .slider {
      background: pr;
      height: 100px;
      margin: auto;
      overflow: hidden;
      position: relative;
      width: 960px;
    }

    .slider::before,
    .slider::after {
      background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
      content: "";
      height: 100px;
      position: absolute;
      width: 200px;
      z-index: 2;
    }

    .slider::after {
      right: 0;
      top: 0;
      -webkit-transform: rotateZ(180deg);
      transform: rotateZ(180deg);
    }

    .slider::before {
      left: 0;
      top: 0;
    }

    .slider .slide-track {
      -webkit-animation: scroll 10s linear infinite;
      animation: scroll 10s linear infinite;
      display: flex;
      width: calc(250px * 15);
    }

    .slider .slide {
      height: 100px;
      width: 350px;
    }
  </style>

</head>

<body>

  <?php
  // include "include/loader.php";
  include "include/navbar.php";

  ?>

  <!-- Hero Start -->
  <!-- Select Data From database for Header -->
  <?php
  $sql = "SELECT * FROM homeheader";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $headertitle = $row['text'];
      $headerlogo = $row['logo'];
    }
  } else {
    echo "0 results";
  }
  ?>


  <!-- Table homeheader -->
  <section class="bg-home bg-half-150 d-table w-100">
    <div class="home-center">
      <div class="home-desc-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 order-1 order-md-1">
              <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 order-1 order-md-2">
                  <div class="title-headingbg mt-1 ms-lg-5">
                    <h3 class="headingbg mb-3 text-white">
                      <?php echo $headertitle ?>
                    </h3>

                  </div>
                </div><!--end col-->
                <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                  <img src="uploads/<?php echo $headerlogo ?>" class="img-fluid" alt="">
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
                    <!-- <div class="col-lg-12">
                    <div class="form-group position-relative">
                      <label>Username <span
                          class="text-danger">*</span></label>
                      <i class="mdi mdi-account ml-3 icons"></i>
                      <input type="text" class="form-control pl-5"
                        placeholder="Username" name="username"
                        id="username" required="">
                    </div>
                  </div> -->

                    <!-- <div class="col-lg-12">
                    <div class="form-group position-relative">
                      <label>Password <span
                          class="text-danger">*</span></label>
                      <i class="mdi mdi-key ml-3 icons"></i>
                      <input type="password" class="form-control pl-5"
                        placeholder="Password" name="password"
                        id="password" required="">
                    </div> 
                  </div> -->

                    <!-- <div class="col-lg-12">
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
                  </div> -->
                    <div class="col-lg-12 mb-0">
                      <!-- <button
                      class="btn btn-primary rounded w-100">Get in</button>
                    <input name="doLogin" type="hidden" value="1" /> -->
                      <a href="http://test.noahimports.com/login" class="btn btn-primary rounded w-100">Sign
                        In</a>
                    </div>
                    <br><br>
                    <div class="col-12 text-center">
                      <p class="mb-0 mt-3"><small class="text-dark mr-2">You do not have an account?</small> <a
                          href="http://test.noahimports.com/register" class="text-dark font-weight-bold">Sign
                          up</a>
                      </p>
                      <img class="lang-img" src="assets/theme_deprixa/images/language-icon.png" class="img-fluid"
                        alt="">

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



  <!-- Table HomeUnderHeader -->
  <?php
  $sql = "SELECT * FROM homeunderheader";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $uhlogo = $row['logo'];
      $uhtitle1 = $row['title1'];
      $uhtitle2 = $row['title2'];
    }
  } else {
    echo "0 results";
  }
  ?>
  <!-- Hero Start -->
  <section class="bottome-banner bg-half-150 d-table w-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-7 order-1 order-md-2">
          <div class="title-heading mt-2 ms-lg-5">
            <h3 class="heading mb-3">
              <?php echo $uhtitle1; ?> <br> <span class="text-danger"><strong>
                  <?php echo $uhtitle2; ?>
                </strong></span>
            </h3>

          </div>
        </div><!--end col-->
        <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
          <img src="uploads/<?php echo $uhlogo; ?>" class="img-fluid" alt="">
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
            <?php include "include/ratesTable.php" ?>
          </div>
        </div>

      </div>
    </div><!--end container-->
  </section><!--end section-->
  <!-- Hero End -->



  <!-- Partners start -->
  <div class="container">
    <div class="row justify-content-center" style="text-align: center;">

      <!-- partial:index.partial.html -->
      <div class="slider">
        <div class="slide-track">

          <?php
          $sql = "SELECT * FROM partners";
          $result = $con->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              ?>
              <div class="slide">
                <?php if (!empty($row['image'])) { ?>
                  <img src="uploads/<?php echo $row['image']; ?>" height="100" width="250" alt="" />
                <?php } else { ?>
                  <img src="uploads/not_found.png" height="100" width="250" alt="" />
                <?php } ?>
              </div>
              <?php
            }
          } else {
            echo "0 results";
          }
          ?>




        </div>
      </div>
      <!-- partial -->



      <!-- end col -->

    </div><!--end row-->
  </div><!--end container-->
  <!-- Partners End -->

  <div class="container-fluid">
    <div class="py-5" style="background: url('uploads/svg-map.svg');">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <span class="clip-text clip-text-image text-uppercase fw-bold">Noah Imports</span>
          </div><!--end col-->
        </div><!--end row-->
      </div><!--end container-->
    </div>
  </div>

  <section class="bg-half-150 d-table w-100" style="background-color: #F0F0F0;">
    <?php include "include/counter.php" ?>
  </section><!--end section-->


  <section style="background-color: white; padding-top: 50px; padding-bottom: 50px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h4 class="title mb-4">Our Happy Customers</h4>
            <p class="text-muted mx-auto para-desc">Start working with <span
                class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness,
              drive traffic, connect.</p>
          </div>
        </div><!--end col-->
      </div><!--end row-->

      <div class="row justify-content-center">
        <div class="col-lg-12 mt-4">
          <div class="tiny-three-item">

            <?php
            $sql = "SELECT * FROM clientreview";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                ?>
                <div class="tiny-slide">
                  <div class="d-flex client-testi m-2">
                    <img src="uploads/<?php echo $row['image']; ?>" class="avatar avatar-small client-image rounded shadow"
                      alt="">
                    <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                      <ul class="list-unstyled mb-0">
                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                      </ul>
                      <p class="text-muted mt-2">"
                        <?php echo $row['review']; ?>"
                      </p>
                      <h6 class="text-primary">-
                        <?php echo $row['name']; ?>
                      </h6>
                    </div>
                  </div>
                </div>
                <?php
              }
            } else {
              echo "0 results";
            }
            ?>





          </div>
        </div><!--end col-->
      </div><!--end row-->
    </div>
  </section>


  <div class="container-fluid" style="background-color: #F0F0F0; padding-top: 50px; padding-bottom: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="text-align: center; font-weight: 900; color: #4C1B8E;">
          <h1>Our Top Branches</h1>
          <p style="color: gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book</p>
        </div>
      </div>
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3">
          <h2 style="color:#4C1B8E">Branch-4</h2>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-map-marker-alt"></i> Keyla Olson</p>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-mobile"></i> +123-444-555</p>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-envelope"></i> branch@gmail.com</p>
        </div>
        <div class="col-md-3">
          <h2 style="color:#4C1B8E">Branch-3</h2>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-map-marker-alt"></i> Keyla Olson</p>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-mobile"></i> +123-444-555</p>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-envelope"></i> branch@gmail.com</p>
        </div>
        <div class="col-md-3">
          <h2 style="color:#4C1B8E">Branch-2</h2>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-map-marker-alt"></i> Keyla Olson</p>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-mobile"></i> +123-444-555</p>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-envelope"></i> branch@gmail.com</p>
        </div>
        <div class="col-md-3">
          <h2 style="color:#4C1B8E">Branch-1</h2>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-map-marker-alt"></i> Keyla Olson</p>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-mobile"></i> +123-444-555</p>
          <p style="color: gray;"><i style="color: #4C1B8E;" class="fas fa-envelope"></i> branch@gmail.com</p>
        </div>
      </div>
    </div>
  </div>


  <section style="padding-top: 50px; padding-bottom: 50px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <div class="section-title mb-4 pb-2">
            <h4 class="title mb-4">Latest News</h4>
            <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness,
              drive traffic, connect.</p>
          </div>
        </div><!--end col-->
      </div><!--end row-->


      <div class="owl-carousel owl-theme">

        <?php
        $sql = "SELECT * FROM news";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            $images = $row['images'];
            $images = explode(",", $images);
            ?>
            <div class="item">
              <a href="blog-slider-post.php?id=<?php echo $row['id']; ?>">
                <div class="card blog rounded border-0 shadow">
                  <div class="position-relative">
                    <img src="uploads/<?php echo $images[0]; ?>" class="card-img-top rounded-top" alt="..." height="280px">
                    <div class="overlay rounded-top"></div>
                  </div>
                  <div class="card-body content">
                    <h5><a href="blog-slider-post.php?id=<?php echo $row['id']; ?>" class="card-title title text-dark">
                        <?php echo $row['title']; ?>
                      </a></h5>
                    <div class="post-meta d-flex justify-content-between mt-3">
                      <ul class="list-unstyled mb-0">
                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i
                              class="uil uil-heart me-1"></i>33</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i
                              class="uil uil-comment me-1"></i>08</a></li>
                      </ul>
                      <a href="blog-slider-post.php?id=<?php echo $row['id']; ?>" class="text-muted readmore">Read More <i
                          class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                  </div>
                  <div class="author">
                    <small class="text-light user d-block"><i class="uil uil-user"></i>
                      <?php echo $row['authName']; ?>
                    </small>
                    <small class="text-light date"><i class="uil uil-calendar-alt"></i>
                      <?php echo $row['date']; ?>
                    </small>
                  </div>
                </div>
            </div>
            <?php
          }
        } else {
          echo "0 results";
        }
        ?>


        </a>

      </div>








    </div>
  </section>



  <!-- Table homelastbluesection -->
  <?php
  $sql = "SELECT * FROM homelastbluesection";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $lbstitle1 = $row['title1'];
      $lbstitle2 = $row['title2'];
      $lbslogo = $row['logo'];
    }
  } else {
    echo "0 results";
  }
  ?>
  <!-- Hero Start -->
  <section class="banner-blue bg-half-10 d-table w-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-7 order-2 order-md-1">
          <div class="title-headingbg mt-2 ms-lg-5">
            <h3 class="headingbg mb-3">
              <?php echo $lbstitle1; ?> <br><span class="heading text-warning"><strong>
                  <?php echo $lbstitle2; ?>
                </strong></span>
            </h3>

          </div>
        </div><!--end col-->
        <div class="col-lg-5 col-md-5 order-1 order-md-2 mt-0 pt-0 mt-sm-0 pt-sm-0">
          <img src="uploads/<?php echo $lbslogo; ?>" class="img-fluid" alt="">
        </div>
      </div><!--end row-->
    </div><!--end container-->
  </section><!--end section-->
  <!-- Hero End -->

  <!-- Hero End -->




  <!-- Back to top -->
  <a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
  </a>
  <!-- Back to top -->

  <?php include "include/footer.php";
  include "include/whatsappPlugin.php";
  ?>





  <!-- javascript -->
  <!-- <script src="assets/theme_deprixa/js/jquery-3.1.0.min.js"></script> -->
  <script src="assets/theme_deprixa/js/bootstrap.bundle.min.js"></script>
  <!-- SLIDER -->
  <script src="assets/theme_deprixa/js/tiny-slider.js"></script>
  <!-- Icons -->
  <script src="assets/theme_deprixa/js/feather.min.js"></script>
  <!-- Main Js -->
  <script src="assets/theme_deprixa/js/plugins.init.js"></script>
  <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
  <script src="assets/theme_deprixa/js/app.js"></script>
  <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

  <!-- Plugin JS file -->

  <script src="plugin/demo.js"></script>
  <script src="plugin/components/moment/moment.min.js"></script>
  <script src="plugin/components/moment/moment-timezone-with-data.min.js"></script>
  <script src="plugin/whatsapp-chat-support.js"></script>



  <script>
    $('#example_1').whatsappChatSupport();

    $('#example_2').whatsappChatSupport();

    $('#example_3').whatsappChatSupport({
      defaultMsg: '',
    });

    $('#example_4').whatsappChatSupport({
      defaultMsg: '',
    });


  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>




</body>



<!-- Mirrored from deprixacargo.link/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:04:55 GMT -->

</html>



<!-- News Crousel -->
<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    nav: true,
    autoplayHoverPause: true,
    responsive: {
      // breakpoint from 0 up
      0: {
        items: 1,
      },
      // breakpoint from 768 up
      768: {
        items: 3,
      }
    }

  });
</script>