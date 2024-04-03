<?php 
include "db/db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}


?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Landrick - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.8.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="blogPageCss/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Tiny -->
        <link href="blogPageCss/tiny-slider.css" rel="stylesheet" type="text/css" />
        <!-- Tobii -->
        <link href="blogPageCss/tobii.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="blogPageCss/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Main Css -->
        <link href="blogPageCss/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="blogPageCss/colors/default.css" rel="stylesheet" id="color-opt">
        <!-- Owl Crousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <?php include "include/navbar.php";?>
        <!-- Navbar End -->
        
        <!-- Start -->
        <section class="bg-half-170 d-table w-100">
            <div class="container">
                <div class="row">

                    

                    <?php
                    $sql = "SELECT * FROM news WHERE id ='$id'";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        $title = $row['title'];
                        $category = $row['category'];
                        $authName = $row['authName'];
                        $date = $row['date'];
                        $detail = $row['description'];
                        $authImage = $row['authImage'];
                        $tags = $row['tags'];
                        $relcategory = $row['category'];
                        $images = $row['images'];
                        $images = explode(",",$images);
                        
                        







                      }
                    } else {
                      echo "0 results";
                    }
                    ?>


                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-5 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 sidebar sticky-bar ms-lg-4">
                            <div class="card-body p-0">
                                <!-- Author -->
                                <div class="text-center">
                                    <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                        Author
                                    </span>

                                    <div class="mt-4">
                                        <img src="uploads/<?php echo $authImage;?>" class="img-fluid avatar avatar-medium rounded-pill shadow-md d-block mx-auto" alt="">

                                        <a href="javascript::void(0)" class="text-primary h5 mt-4 mb-0 d-block"><?php echo $authName;?></a>
                                        <small class="text-muted d-block"></small>
                                    </div>
                                </div>
                                <!-- Author -->
    
                                <!-- RECENT POST -->
                                <div class="widget mt-4">
                                    <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                        Recent Post
                                    </span>

                                    <div class="mt-4">
                                        <?php 
                                        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
                                        $result = $con->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                              $latestimage = $row['images'];
                                              $latestimage = explode(",",$latestimage);
                                            ?>
                                            <div class="d-flex align-items-center">
                                            <img src="uploads/<?php echo $latestimage[0];?>" class="avatar avatar-small rounded" style="width: 100px;" alt="">
                                            <div class="flex-1 ms-3 mt-4">
                                                <a href="blog-slider-post.php?id=<?php echo $row['id'];?>" class="d-block title text-dark"><?php echo $row['title'];?></a>
                                                <span class="text-muted"><?php echo $row['date'];?></span>
                                            </div>
                                        </div>
                                            <?php
                                          }
                                        } else {
                                          echo "0 results";
                                        }
                                        ?>

                                        

                                        
                                        
                                        
                                    </div>
                                </div>
                                <!-- RECENT POST -->
    
                                <!-- TAG CLOUDS -->
                                <div class="widget mt-4">
                                    <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                        Tagclouds
                                    </span>
                                    
                                    <div class="tagcloud text-center mt-4">
                                        <a href="jvascript:void(0)" class="rounded"><?php echo $tags;?></a>
                                       
                                    </div>
                                </div>
                                <!-- TAG CLOUDS -->
                                
                                <!-- SOCIAL -->
                                <div class="widget mt-4">
                                    <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                        Social Media
                                    </span>

                                    <ul class="list-unstyled social-icon text-center mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <!-- SOCIAL -->
                            </div>
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->

                    <div class="col-lg-8 col-md-7">
                        <div class="card border-0 shadow rounded overflow-hidden">
                            
                        <div class="owl-carousel owl-theme">
                            <?php
                            foreach($images as $img){
                                ?>
                                <div class="item">
        <img src="uploads/<?php echo $img?>" height="400px" alt="">
    </div>
                                <?php
                            }
                            ?>
    
    
</div>

                            <div class="card-body">
                                <div class="text-center">
                                    <span class="badge bg-primary"><?php echo $category;?></span>
                                    <h4 class="mt-3"><?php echo $title;?></h4>

                                    <ul class="list-unstyled mt-3">
                                        <li class="list-inline-item user text-muted me-2"><i class="mdi mdi-account"></i> <?php echo $authName;?></li>
                                        <li class="list-inline-item date text-muted"><i class="mdi mdi-calendar-check"></i> <?php echo $date;?></li>
                                    </ul>
                                </div>

                                <p class="text-muted mt-3"><?php echo $detail;?></p>
                                
                               
                                <div class="post-meta mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Comments :</h5>

                                <ul class="media-list list-unstyled mb-0">
                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="pe-3" href="#">
                                                    <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                    <small class="text-muted">15th August, 2021 at 01:25 pm</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </li>
    
                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="pe-3" href="#">
                                                    <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">Tammy Camacho</a></h6>
                                                    <small class="text-muted">15th August, 2021 at 05:44 pm</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </li>
                                    
                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="pe-3" href="#">
                                                    <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">Tammy Camacho</a></h6>
                                                    <small class="text-muted">16th August, 2021 at 03:44 pm</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
    
                                        <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                            <li class="mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a class="pe-3" href="#">
                                                            <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                        </a>
                                                        <div class="commentor-detail">
                                                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                            <small class="text-muted">17th August, 2021 at 01:25 pm</small>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                                </div>
                                                <div class="mt-3">
                                                    <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Leave A Comment :</h5>

                                <form class="mt-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Comment</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control ps-5" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input id="name2" name="name" type="text" placeholder="Name" class="form-control ps-5" required="">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input id="email2" type="email" placeholder="Email" name="email" class="form-control ps-5" required="">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-md-12">
                                            <div class="send d-grid">
                                                <button type="submit" class="btn btn-primary">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->

                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Related Posts :</h5>

                                <div class="row">
                                    <?php
                                    $sql = "SELECT * FROM news WHERE category like '%$relcategory%' ORDER BY id DESC LIMIT 2";
                                    $result = $con->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        $images = $row['images'];
                                        $images = explode(",",$images);
                                        ?>
                                        <div class="col-lg-6 mt-4 pt-2">
                                        <a href="blog-slider-post.php?id=<?php echo $row['id'];?>">
                                        <div class="card blog rounded border-0 shadow">
                                            <div class="position-relative">
                                                <img src="uploads/<?php echo $images[0]?>" class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top"></div>
                                            </div>
                                            <div class="card-body content">
                                                <h5><a href="blog-slider-post.php?id=<?php echo $row['id'];?>" class="card-title title text-dark"><?php echo $row['title'];?></a></h5>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                                    </ul>
                                                    <a href="blog-slider-post.php?id=<?php echo $row['id'];?>" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                                </div>
                                            </div>
                                            <div class="author">
                                                <small class="text-light user d-block"><i class="uil uil-user"></i> <?php echo $row['authName'];?></small>
                                                <small class="text-light date"><i class="uil uil-calendar-alt"></i> <?php echo $row['date'];?></small>
                                            </div>
                                        </div>
                                        </a>
                                    </div><!--end col-->
                                        <?php
                                      }
                                    } else {
                                      echo "0 results";
                                    }
                                    ?>
                                    
                                    
                                    
                                </div><!--end row-->
                            </div>
                        </div>

                        
                    </div><!--end col-->

                    
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Insta Post Start -->
        
        <!-- Insta Post End -->

        
        <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" height="24" class="light-version" alt="">
                    <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row">
                    <div class="col-12">
                        <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" class="img-fluid d-block mx-auto" style="max-width: 256px;" alt="">
                        <div class="card border-0 mt-5" style="z-index: 1">
                            <div class="card-body p-0">
                                <form method="post" name="myForm" onsubmit="return validateForm()">
                                    <p id="error-msg" class="mb-0"></p>
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                                                </div>
                                            </div> 
                                        </div><!--end col-->
    
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Subject</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Comments <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/4n73n" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas bg-white offcanvas-top" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-body d-flex align-items-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <h4>Search now.....</h4>
                                <div class="subcribe-form mt-4">
                                    <form>
                                        <div class="mb-0">
                                            <input type="text" id="help" name="name" class="border bg-white rounded-pill" required="" placeholder="Search">
                                            <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
        <!-- Offcanvas End -->
<?php include "include/footer.php";?>
        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

       
        <!-- end Style switcher -->

        <!-- javascript -->
        <script src="blogPageJs/bootstrap.bundle.min.js"></script>
        <!-- Tiny slider -->
        <script src="blogPageJs/tiny-slider.js"></script>
        <!-- Tobii -->
        <script src="blogPageJs/tobii.min.js"></script>
        <!-- Icons -->
        <script src="blogPageJs/feather.min.js"></script>
        <!-- Switcher -->
        <script src="blogPageJs/switcher.js"></script>
        <!-- Main Js -->
        <script src="blogPageJs/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="blogPageJs/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

