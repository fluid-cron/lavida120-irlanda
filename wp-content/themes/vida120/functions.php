<?php 

show_admin_bar(false);

register_nav_menu( 'primary', __( 'Navigation Menu', 'digitaria' ) );

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {

    register_sidebar( array(
        'name' => 'Logo Header',
        'id' => 'logo-header',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
    
    register_sidebar( array(
        'name' => 'Logo Footer',
        'id' => 'logo-footer',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );

    register_sidebar( array(
        'name' => 'Banner Home',
        'id' => 'banner-home',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );    

    register_sidebar( array(
        'name' => 'Redes Header',
        'id' => 'redes-header',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
   
}


?>