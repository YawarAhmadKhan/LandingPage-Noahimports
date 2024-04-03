
<!-- Table Counter -->
<?php
$sql = "SELECT * FROM `counter`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $ctitle1 = $row['title1'];
    $ctitle2 = $row['title2'];
    $cftext = $row['firsttext'];
    $cfnum = $row['firstnum'];
    $cstext = $row['secondtext'];
    $csnum = $row['secondnum'];
    $cttext = $row['thirdtext'];
    $ctnum = $row['thirdnum'];
    $cfftext = $row['fourthtext'];
    $cffnum = $row['fourthnum'];
}
} else {
  echo "0 results";
}
?>
<div class="container">
                <div class="row justify-content-center">

                   <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <div class="section-title mb-4 pb-2">
                                    <p class="text-muted para-desc mx-auto mb-0"><span class="text-danger fw-bold"><?php echo $ctitle1;?></span> </p>
                                    <h4 class="title mb-4"><?php echo $ctitle2;?></span></h4>
                                    
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row" id="counter">
                            <div class="col-md-3 col-6 mt-4 pt-2">
                                <div class="counter-box text-center">
                                    <img src="assets/theme_deprixa/images/illustrator/Asset190.png" class="avatar avatar-small" alt="">
                                    <h2 class="mb-0 mt-4 text-danger"><span class="counter-value" data-target="<?php echo $cfnum;?>">1000</span></h2>
                                    <h6 class="counter-head text-muted"><?php echo $cftext;?></h6>
                                </div><!--end counter box-->
                            </div>

                            <div class="col-md-3 col-6 mt-4 pt-2">
                                <div class="counter-box text-center">
                                    <img src="assets/theme_deprixa/images/illustrator/Asset189.png" class="avatar avatar-small" alt="">
                                    <h2 class="mb-0 mt-4 text-danger"><span class="counter-value" data-target="<?php echo $csnum;?>">500</span>+</h2>
                                    <h6 class="counter-head text-muted"><?php echo $cstext;?></h6>
                                </div><!--end counter box-->
                            </div>

                            <div class="col-md-3 col-6 mt-4 pt-2">
                                <div class="counter-box text-center">
                                    <img src="assets/theme_deprixa/images/illustrator/Asset186.png" class="avatar avatar-small" alt="">
                                    <h2 class="mb-0 mt-4 text-danger"><span class="counter-value" data-target="<?php echo $ctnum;?>">500</span></h2>
                                    <h6 class="counter-head text-muted"><?php echo $cttext;?></h6>
                                </div><!--end counter box-->
                            </div>

                            <div class="col-md-3 col-6 mt-4 pt-2">
                                <div class="counter-box text-center">
                                    <img src="assets/theme_deprixa/images/illustrator/Asset187.png" class="avatar avatar-small" alt="">
                                    <h2 class="mb-0 mt-4 text-danger"><span class="counter-value" data-target="<?php echo $cffnum;?>">1</span>Yr</h2>
                                    <h6 class="counter-head text-muted"><?php echo $cfftext;?></h6>
                                </div><!--end counter box-->
                            </div>
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
             </div><!--end container--> 