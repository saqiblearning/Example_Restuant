

<?php 

function load_stylesheets(){

   wp_register_style('animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), 1, 'all' );
   wp_enqueue_style('animate');	

   wp_register_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), 1, 'all' );
   wp_enqueue_style('aos');

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all' );
   wp_enqueue_style('bootstrap');

    wp_register_style('icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), 1, 'all' );
   wp_enqueue_style('icons');

    wp_register_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), 1, 'all' );
   wp_enqueue_style('boxicons');

    wp_register_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), 1, 'all' );
   wp_enqueue_style('glightbox');

    wp_register_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), 1, 'all' );
   wp_enqueue_style('swiper');

    wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all' );
   wp_enqueue_style('styles');

   wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all' );
   wp_enqueue_style('custom');


}
add_action('wp_enqueue_scripts', 'load_stylesheets');	






// Load scripts
  function addjs(){
    
    wp_register_script('aosjs', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array() , 1, 1, 1);	
    wp_enqueue_script('aosjs');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array() , 1, 1, 1);	
    wp_enqueue_script('bootstrap');

    wp_register_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array() , 1, 1, 1);	
    wp_enqueue_script('glightbox');

    wp_register_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array() , 1, 1, 1);	
    wp_enqueue_script('isotope');

    wp_register_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array() , 1, 1, 1);	
    wp_enqueue_script('swiper');
  

	 wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array() , 1, 1, 1);	
    wp_enqueue_script('main');

    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array() , 1, 1, 1);	
    wp_enqueue_script('custom');


  
  }

   add_action( 'wp_enqueue_scripts', 'addjs' );


function resturent_footer_widget(){


 register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'address' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'address' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

 register_sidebar( array(
        'name' => __( 'Page-Links', 'Link_list' ),
        'id' => 'Page-Links',
        'description' => __( 'Page-Links', 'Link_list' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


  register_sidebar( array(
        'name' => __( 'Service-Link', 'Service_Link_list' ),
        'id' => 'Service-Link',
        'description' => __( 'Service-Link', 'Service_Link_list' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

   register_sidebar( array(
        'name' => __( 'Subscribe', 'Subscribe_Link' ),
        'id' => 'Subscribe',
        'description' => __( 'Subscribe', 'Subscribe_Link' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
        

}
add_action( 'widgets_init', 'resturent_footer_widget' );



?>

















 
 
 
  
  
 