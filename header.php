<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>
    <header class="cv-header">
      <div class="cv-logo">
        <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else {
            echo '<div class="cv-defaultLogo"> insert logo here </div>';
          };
        ?>
      </div>
      <div class="">
        <?php
        wp_nav_menu(
          array(
          'theme_location' => 'top-menu',
          'menu' => 'primary',
          'menu_class' => 'cv-topMenu'
          )
        );

        /**
         * Register a custom menu page.
         */
        function wpdocs_register_my_custom_menu_page() {
            add_menu_page(
                __( 'Custom Menu Title', 'textdomain' ),
                'custom menu',
                'manage_options',
                '',
                '',
                '',
                6
            );
        }
        add_action( 'primary', 'wpdocs_register_my_custom_menu_page' );
      ?>
      </div>
      <div class="bruh">
        <?php get_sidebar('primary'); ?>
        <div class="cv-sidebarButton">
          &#9776;
        </div>
        <div class="cv-sidebarClose">
          &times;
        </div>
      </div>
    </header>

    <div class="cv-sidebarSecondary">
      <?php get_sidebar('secondary'); ?>
    </div>
