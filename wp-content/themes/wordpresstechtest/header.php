<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php 
		$faviconid = get_option('tcs_favicon');
		$favicon = wp_get_attachment_url($faviconid);
        $primary_logo_id = get_option('tcs_logo_primary');
		$primary_logo = wp_get_attachment_url($primary_logo_id);
        ?>
 <link href="<?php echo esc_url($favicon); ?>" rel="icon">
<?php wp_head(); ?>

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-6 text-center text-lg-start">
                    <p class="text-white mb-0"><i class="fa fa-map-marker-alt"></i><?php echo $address = get_option('tcs_address');?></p>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <p class="text-white mb-0">Call Us for Inquiry: <span class="text-primary"><?php echo esc_attr(get_option('tcs_phone')); ?></span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0">

        <a href="<?php echo esc_url( home_url('/') ); ?>" class="table-cell align-middle"><img loading="lazy" src="<?php echo esc_url($primary_logo); ?>" alt="logo" width="200px"
                                class="object-contain"></a>

        <button type="button"
                class="navbar-toggler me-4"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse p-3" id="navbarCollapse">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'      => false,
                'menu_class'     => 'navbar-nav ms-auto',
                'fallback_cb'    => false,
            ));
            ?>

        </div>

    </nav>
</div>