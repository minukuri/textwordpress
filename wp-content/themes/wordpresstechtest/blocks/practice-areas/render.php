<?php
$section_title = $attributes['section_title'];
$heading       = $attributes['heading'];
$args = array(
    'post_type'      => 'practice_area',
    'posts_per_page' => 6
);
$query = new WP_Query($args);
?>
<!-- Practice Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title text-primary">
                <?php echo esc_html($section_title); ?>
            </h6>
            <h1 class="display-5 mb-5">
                <?php echo esc_html($heading); ?>
            </h1>
        </div>

        <div class="row g-4 g-md-0 text-center">

            <?php if($query->have_posts()) : ?>

            <?php while($query->have_posts()) : $query->the_post(); ?>

            <div class="col-md-6 col-lg-4">

                <div class="practice-item h-100 p-4 border-bottom border-end wow fadeIn" data-wow-delay="0.1s">

                    <i class="fa fa-building fa-4x text-primary mb-4"></i>

                    <?php endif; ?>

                    <h4 class="mb-3">
                        <?php the_title(); ?>
                    </h4>

                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </p>

                    <a href="<?php the_permalink(); ?>">
                        <i class="fa fa-arrow-right fa-2x text-primary"></i>
                    </a>

                </div>

            </div>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <?php else : ?>

            <div class="col-12">
                <p>No Practice Areas Found.</p>
            </div>

            <?php endif; ?>

        </div>

    </div>
</div>
<!-- Practice End -->