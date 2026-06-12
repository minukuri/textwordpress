<?php
/*
Plugin Name: Theme Global Settings
Description: Global settings for Logos, Favicon, Email, Phone and WhatsApp.
Version: 1.1
Author: Ravindar Minukuri
*/
if (!defined('ABSPATH')) {

    exit;

}

function tcs_add_admin_menu() {

    add_menu_page(

        'Theme Settings',

        'Theme Settings',

        'manage_options',

        'tcs-settings',

        'tcs_settings_page',

        'dashicons-admin-generic',

        60

    );

}

add_action('admin_menu', 'tcs_add_admin_menu');
function tcs_register_settings() {
    register_setting('tcs_group', 'tcs_logo_primary');
    register_setting('tcs_group', 'tcs_favicon');
    register_setting('tcs_group', 'tcs_email');
    register_setting('tcs_group', 'tcs_phone');
    register_setting('tcs_group', 'tcs_whatsapp');
    register_setting('tcs_group', 'tcs_address');
}

add_action('admin_init', 'tcs_register_settings');

function tcs_settings_page() {

?>

<div class="wrap">

    <h1>Theme Settings</h1>



    <form method="post" action="options.php">

        <?php settings_fields('tcs_group'); ?>



        <table class="form-table">



            <?php

            tcs_image_field('Primary Logo', 'tcs_logo_primary');
            tcs_image_field('Favicon', 'tcs_favicon');

            ?>



            <tr>

                <th>Email</th>

                <td>

                    <input type="email" name="tcs_email" value="<?php echo esc_attr(get_option('tcs_email')); ?>" />

                </td>

            </tr>


            <tr>

                <th>Phone</th>

                <td>

                    <input type="text" name="tcs_phone" value="<?php echo esc_attr(get_option('tcs_phone')); ?>" />

                </td>

            </tr>



            <tr>

                <th>WhatsApp</th>

                <td>

                    <input type="text" name="tcs_whatsapp"
                        value="<?php echo esc_attr(get_option('tcs_whatsapp')); ?>" />

                    <p>Enter number with country code (Example: 919999999999)</p>

                </td>

            </tr>

            <tr>

                <th>Address</th>

                <td>

                    <textarea name="tcs_address" rows="4" cols="50" style="width: 400px;"><?php 

echo esc_textarea(get_option('tcs_address')); 

?></textarea>

                </td>

            </tr>



        </table>



        <?php submit_button(); ?>

    </form>

</div>

<?php

}


function tcs_image_field($label, $option_name) {



    $image_id = get_option($option_name);

    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';



    ?>

<tr>

    <th><?php echo esc_html($label); ?></th>

    <td>

        <input type="hidden" name="<?php echo esc_attr($option_name); ?>" id="<?php echo esc_attr($option_name); ?>"
            value="<?php echo esc_attr($image_id); ?>" />



        <button class="button tcs-upload" data-target="<?php echo esc_attr($option_name); ?>">

            Upload

        </button>



        <button class="button tcs-remove" data-target="<?php echo esc_attr($option_name); ?>">

            Remove

        </button>



        <div style="margin-top:10px;">

            <?php if ($image_url) : ?>

            <img src="<?php echo esc_url($image_url); ?>" width="120">

            <?php endif; ?>

        </div>

    </td>

</tr>

<?php

}



function tcs_admin_scripts($hook) {



    if ($hook !== 'toplevel_page_tcs-settings') {

        return;

    }



    wp_enqueue_media();



    wp_enqueue_script(

        'tcs-admin-js',

        plugin_dir_url(__FILE__) . 'admin.js',

        array('jquery'),

        '1.0',

        true

    );

}

add_action('admin_enqueue_scripts', 'tcs_admin_scripts');


function tcs_output_favicon() {

    $favicon_id = get_option('tcs_favicon');

    if ($favicon_id) {

        $url = wp_get_attachment_url($favicon_id);

        echo '<link rel="icon" href="' . esc_url($url) . '" />';

    }

}

add_action('wp_head', 'tcs_output_favicon');