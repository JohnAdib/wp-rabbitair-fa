<footer class="container">
  <div>
    <div class="contact-boxes">
      <div class="row">
        <div class="span6 phone-contact">
          <h3>با ما در تماس باشید</h3>
          <p><a href="tel:8888668862">888.866.8862<i class="fa fa-phone" aria-hidden="true"></i></a></p>
        </div>
        <div class="span6 social-contact">
          <h3>ما را دنبال کنید</h3>
          <p><a href=""><img src="<?php bloginfo('template_url'); ?>\images\facebook.png"></a></p>
          <p><a href=""><img src="<?php bloginfo('template_url'); ?>\images\twitter.png"></a></p>
          <p><a href=""><img src="<?php bloginfo('template_url'); ?>\images\Instagram (2).png"></a></p>
          <p><a href=""><img src="<?php bloginfo('template_url'); ?>\images\aparat_icon_color_black_128.png"></a></p>
        </div>
      </div>
    </div>

    <div class="bottom-menu">
      <?php wp_nav_menu(['theme_location' => 'menu_footer']); ?>
    </div>
  </div>
</footer>
</body>
</html>