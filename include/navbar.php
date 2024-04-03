<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div class="logo-block-wrapper">
            <!-- Select Logo From Database -->
            <!-- Select Navbar Links From Database -->
            <?php
            $sql = "SELECT * FROM navbarlogo";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $logo = $row['image'];
                    $logoUrl = $row['url'];
                }
            } else {
                echo "0 results";
            }
            ?>

            <a class="logo" href="<?php echo $logoUrl; ?>"><img src="uploads/<?php echo $logo; ?>" alt="Noah Imports"
                    width="171" height="44" /></a>

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



        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <!-- Select Navbar Links From Database -->
                <?php
                $sql = "SELECT * FROM navbarlinks";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <li><a href="<?php echo $row['url']; ?>" class="sub-menu-item">
                                <?php echo $row['title']; ?>
                            </a></li>

                        <?php
                    }
                    ?>
                    <li>
                        <div class="buy-button">
                            <a href="http://test.noahimports.com/login" class="btn btn-light-outline rounded"><i
                                    class="mdi mdi-account-alert ml-3 icons"></i>
                                Sign up</a>
                        </div>
                    </li>
                    <?php
                } else {
                    echo "0 results";
                }
                ?>



                <!-- <li><a href="aboutus.html" class="sub-menu-item">Company</a></li>

                <li><a href="tracking.html" class="sub-menu-item"><i class="mdi mdi-package-variant-closed"></i> Tracking</a></li>

                <li><a href="services-freight.html" class="sub-menu-item">Service</a></li> -->

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div>
</header><!-- Navbar End -->