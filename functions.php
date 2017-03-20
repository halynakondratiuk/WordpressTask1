<?php function addImageSupport_setup() {
       //Add featured image support
       add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'addImageSupport_setup');
add_image_size('small-thumbnail', 180, 120, true);
add_image_size('banner-image', 700, 210, true); 

//Navigation menu
register_nav_menus(array(
        'primary' => __( 'Primary Menu' ),
));






