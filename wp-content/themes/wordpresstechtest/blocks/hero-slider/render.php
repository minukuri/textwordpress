<?php
$heading = $attributes['heading'] ?? '';
$subheading = $attributes['subheading'] ?? '';
$award = $attributes['award'] ?? '';
$lawyers = $attributes['wptests'] ?? '';
$reviews = $attributes['reviews'] ?? '';
?>
 <!-- Carousel start -->
<div class="container-fluid hero-header bg-secondary py-5 pb-md-0 mb-5">
        <div class="container">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-1 text-primary mb-4 animated slideInRight">
    Your Trusted <span class="text-white"><?php echo esc_html($heading); ?>
    </span>
</h1>
                      
                    <h5 class="d-inline-block bg-dark text-primary py-3 px-4 mb-0 animated slideInRight"><?php echo esc_html($subheading); ?></h5>
                </div>
                <?php
                $image1 = $attributes['image1'] ?? '';
                $image2 = $attributes['image2'] ?? '';
                $image3 = $attributes['image3'] ?? '';
                ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        <img class="img-fluid" src="<?php echo esc_url($image1); ?>" alt="">
                        <img class="img-fluid" src="<?php echo esc_url($image2); ?>" alt="">
                        <img class="img-fluid" src="<?php echo esc_url($image3); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-4 animated fadeIn d-none d-md-flex">
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center bg-dark p-4 h-100">
                        <i class="fa fa-award fa-3x text-primary mb-3"></i>
                        <h1 class="display-5 text-white"><?php echo esc_html($award); ?></h1>
                        <span>Award Winning</span>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center bg-dark p-4 h-100">
                        <i class="fa fa-users fa-3x text-primary mb-3"></i>
                        <h1 class="display-5 text-white"> <?php echo esc_html($lawyers); ?></h1>
                        <span>Our Lawyers</span>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center bg-dark p-4 h-100">
                        <i class="fa fa-comments fa-3x text-primary mb-3"></i>
                        <h1 class="display-5 text-white"><?php echo esc_html($reviews); ?></h1>
                        <span>Client's Review</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->