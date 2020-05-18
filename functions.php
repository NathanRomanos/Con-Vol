
<?php

//load stylesheets
function load_css(){

  //bootstrap
  wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all');
  wp_enqueue_style('bootstrap');

  //my css
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');
}

//hook
add_action('wp_enqueue_scripts','load_css');


//load javascript
function load_js(){

  wp_enqueue_script('jquery');

  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
		wp_enqueue_script('bootstrap');

    wp_register_script('js', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
    wp_enqueue_script('js');
}

//hook
add_action('wp_enqueue_scripts','load_js');

//menus
add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location'
    )
  );


  //logo
  function themename_custom_logo_setup() {
   $defaults = array(
   'height'      => 100,
   'width'       => 400,
   'flex-height' => false,
   'flex-width'  => false,
   'header-text' => array( 'site-title', 'site-description' ),
   );
   add_theme_support( 'custom-logo', $defaults );
  }
  add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


  //widgets
  add_theme_support('widgets');


  //sidebar
  add_action( 'widgets_init', 'my_register_sidebars' );
  function my_register_sidebars() {
      /* Register the 'primary' sidebar. */
      register_sidebar(
          array(
              'id'            => 'primary',
              'name'          => __( 'Primary Sidebar' ),
              'description'   => __( 'This is just for the search function.' ),
              'before_widget' => '<div id="%1$s" class="widget %2$s">',
              'after_widget'  => '</div>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>',
          )
      );
      register_sidebar(
          array(
              'id'            => 'secondary',
              'name'          => __( 'Secondary Sidebar' ),
              'description'   => __( 'This sidebar can be attatched to the right hand side of your page.' ),
              'before_widget' => '<div id="%1$s" class="widget %2$s">',
              'after_widget'  => '</div>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>',
          )
      );
      /* Repeat register_sidebar() code for additional sidebars. */
  }

  //thumnbnails
  add_theme_support( 'post-thumbnails' );






  //test
  require get_template_directory() . '/includes/starter-content.php';
	add_theme_support( 'starter-content', twentytwenty_get_starter_content() );


?>
