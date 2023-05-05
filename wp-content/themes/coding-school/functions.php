<?php



function coding_school_styles() {
    wp_enqueue_style( 'owl-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap' );
    wp_enqueue_style( 'coding-responsive-style', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'coding-map-style', get_template_directory_uri() . '/assets/css/style.css' );
    

}
add_action( 'wp_enqueue_scripts', 'coding_school_styles' );


function coding_school_scripts()
{
    wp_enqueue_script( 'jquery-coding-school', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null,'all',true );
    wp_enqueue_script( 'bootstrap-coding-school', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), null,'all',true );
    wp_enqueue_script( 'custom-coding-school', get_template_directory_uri() . '/assets/js/custom.js', array(), null,'all',true );


}
add_action( 'wp_enqueue_scripts', 'coding_school_scripts' );




function coding_school_support()
{
    add_theme_support('title-tag');

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'coding_school_support');




function coding_school_menus(){

    $locations = array(
'primary'=> "Desktop Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'coding_school_menus');




function coding_school_widget_areas() {

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="info_social">',
            'after_widget' => '</div>',
            'name' => 'sidebar area',
            'id' =>'sidebar-1',
            'description' => 'Sidebar widget area',
        )
    );
}


add_action('widgets_init', 'coding_school_widget_areas');


?>