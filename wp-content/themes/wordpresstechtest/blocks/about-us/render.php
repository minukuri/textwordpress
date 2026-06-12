<?php
$experience = $attributes['experience'] ?? '';
$section_title = $attributes['section_title'] ?? '';
$heading = $attributes['heading'] ?? '';
$description = $attributes['description'] ?? '';
$why_choose = $attributes['why_choose'] ?? '';
$image1 = $attributes['image1'] ?? '';
$image2 = $attributes['image2'] ?? '';
$image3 = $attributes['image3'] ?? '';
?>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6">

                <div class="row g-0">

                    <div class="col-6 position-relative bg-secondary">

                        <div class="about-exp bg-dark">

                            <h1 class="display-1 text-primary mb-0">
                                <?php echo esc_html($experience); ?>
                            </h1>

                            <span class="fs-5 text-white">
                                Years Experience
                            </span>

                        </div>

                    </div>

                    <div class="col-6">
                        <img class="img-fluid" src="<?php echo esc_url($image1); ?>">
                    </div>

                    <div class="col-6">
                        <img class="img-fluid" src="<?php echo esc_url($image2); ?>">
                    </div>

                    <div class="col-6">
                        <img class="img-fluid" src="<?php echo esc_url($image3); ?>">
                    </div>

                </div>

            </div>
            <div class="col-lg-6">
                <h6 class="section-title text-primary">
                    <?php echo esc_html($section_title); ?>
                </h6>
                <h1 class="display-5 mb-4">
                    <?php echo esc_html($heading); ?>
                </h1>
                <p>
                    <?php echo esc_html($description); ?>
                </p>
                <h4>Why Choose Us!</h4>
                <p>
                    <?php echo esc_html($why_choose); ?>
                </p>
                <a class="btn btn-primary py-3 px-4" href="#">
                    Contact Us
                </a>

            </div>

        </div>
    </div>
</div>