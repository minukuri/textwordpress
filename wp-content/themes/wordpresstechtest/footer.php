<!-- Newsletter Start -->
<div class="container-fluid bg-secondary py-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-5 text-white mb-4">Subscribe the Newsletter</h1>
                <div class="position-relative w-100 mb-2">
                    <input class="form-control bg-dark border-0 w-100 ps-4 pe-5" type="text"
                        placeholder="Enter Your Email" style="height: 60px;">
                    <button type="button"
                        class="btn btn-lg-square shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
                <p class="text-body mb-0">Don't worry, we won't spam you with emails.</p>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary mb-4">Our Office</h4>
                <p class="mb-2"><i
                        class="fa fa-map-marker-alt me-3"></i><?php echo $address = get_option('tcs_address');?></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo esc_attr(get_option('tcs_phone')); ?></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $address = get_option('tcs_email');?></p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-x-twitter"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'container'      => false,
                    'menu_class'     => 'list-styled'
                ));
                ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary mb-4">Latest News</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <a href="" class="d-block mb-1">How Contracts Prevent Disputes</a>
                        <div class="d-flex">
                            <small class="mb-0 me-3"><i class="fa fa-user me-1"></i>Admin</small>
                            <small class="mb-0 me-3"><i class="fa fa-calendar me-1"></i>01 Jan, 2045</small>
                        </div>
                    </li>
                    <li class="list-group-item px-0">
                        <a href="" class="d-block mb-1">Key Steps Before Filing Lawsuits</a>
                        <div class="d-flex">
                            <small class="mb-0 me-3"><i class="fa fa-user me-1"></i>Admin</small>
                            <small class="mb-0 me-3"><i class="fa fa-calendar me-1"></i>01 Jan, 2045</small>
                        </div>
                    </li>
                    <li class="list-group-item px-0">
                        <a href="" class="d-block mb-1">Essential Tips After Car Accidents</a>
                        <div class="d-flex">
                            <small class="mb-0 me-3"><i class="fa fa-user me-1"></i>Admin</small>
                            <small class="mb-0 me-3"><i class="fa fa-calendar me-1"></i>01 Jan, 2045</small>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary mb-4">Business Hours</h4>
                <p class="mb-1">Monday - Friday</p>
                <h6 class="text-body">09:00 am - 07:00 pm</h6>
                <p class="mb-1">Saturday</p>
                <h6 class="text-body">09:00 am - 12:00 pm</h6>
                <p class="mb-1">Sunday</p>
                <h6 class="text-body">Closed</h6>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
            </div>

        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<?php wp_footer(); ?>
</body>

</html>