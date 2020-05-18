    <footer class="cv-footer jumbotron">
      <div>copyright@2020</div>
      <div class="">
        <?php
        wp_nav_menu(
          array(
          'theme_location' => 'footer-menu',
          'menu' => 'Social Links Menu',
          'menu_class' => 'cv-topMenu'
          )
        );
        ?>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
