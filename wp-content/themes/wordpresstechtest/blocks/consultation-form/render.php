<?php
$section_title = $attributes['section_title'] ?? '';
$heading       = $attributes['heading'] ?? '';
$description   = $attributes['description'] ?? '';
$form_id       = $attributes['form_id'] ?? '';
$image         = $attributes['image'] ?? '';
?>
<div class="container-fluid py-5">
    <div class="container">

        <div class="row g-5">

            <div class="col-lg-5">

                <?php if($image) : ?>

                    <img class="img-fluid w-100"
                         src="<?php echo esc_url($image); ?>"
                         alt="">

                <?php endif; ?>

            </div>

            <div class="col-lg-7">

                <h6 class="section-title text-primary">
                    <?php echo esc_html($section_title); ?>
                </h6>

                <h1 class="display-5 mb-4">
                    <?php echo esc_html($heading); ?>
                </h1>

                <p class="mb-4">
                    <?php echo esc_html($description); ?>
                </p>

                <?php
                if(!empty($form_id)) {
                    echo do_shortcode(
                        '[contact-form-7 id="' .
                        esc_attr($form_id) .
                        '"]'
                    );

                }
                ?>

            </div>

        </div>

    </div>
</div>