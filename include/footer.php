<?php
$sql = "SELECT * FROM footer";
$run = mysqli_query($con,$sql);
if(mysqli_num_rows($run) > 0){
    while($row = mysqli_fetch_array($run)){
        $para = $row['paragraph'];
    }
}

?>

<!-- Footer Start -->
  <footer class="footer footer-bar">
            <div class="footer-py-30">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="text-sm-start">
                                <p class="mb-0"> © <script>document.write(new Date().getFullYear())</script> <?php echo $para;?> <i class="mdi mdi-heart text-danger"></i> </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <ul class="list-unstyled footer-list terms-service mb-0">
                                <li class="list-inline-item mb-0"><a href="terms_and_conditions.php" class="text-foot me-2">Terms & Conditions</a></li>
                                <li class="list-inline-item mb-0"><a href="privacy_policy.php" class="text-foot me-2">Privacy Policy</a></li>
                            </ul>
                        </div><!--end col-->
                        <div class="col-md-2">
                            <a href=""><i style="color: white;" class="fab fa-facebook"></i></a> 
                            <a href=""><i style="color: white;" class="fab fa-instagram"></i></a>
                            <a href=""><i style="color: white;" class="fab fa-twitter"></i></a>
                            <a href=""><i style="color: white;" class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->
