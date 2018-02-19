
<?php if( ot_get_option( 'footer_promo' ) == 'on' ): ?>
        <section class="page-title page-title-2 image-bg overlay parallax footer-img">
		        <div class="background-image-holder footerwidget">
		            <img alt="Background Image" class="background-image" src="<?php echo ot_get_option( 'footer_promo_image' ); ?>">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <h2 class="uppercase mb8"><?php echo ot_get_option( 'footer_promo_header' ); ?></h2>
		                    <h4><?php echo ot_get_option( 'footer_promo_text' ); ?></p>
		                </div>
		                <div class="col-md-6 text-right">
		                    <a class="btn btn-lg btn-white mb0" href="<?php echo get_page_link( ot_get_option( 'footer_promo_button_link' )); ?>"><?php echo ot_get_option( 'footer_promo_button_text' ); ?></a>
		                </div>
		            </div>
		        </div>
		    </section>
<?php endif; ?>
<footer class="footer-2 bg-dark text-center-xs" style="padding: 40px 0; background: #009688;">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 ">
        <a href="#"><img class="image-xs fade-half" alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
      </div>
      <div class="col-sm-4 text-center">
        <span class="fade-half">
          <a href="#">+381637655765</a>
          <a href="#">office@guideinserbia.com</a>
        </span>
      </div>
      <div class="col-sm-4 text-right text-center-xs">
        <ul class="list-inline social-list">
          <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li><a href="#"><i class="ti-facebook"></i></a></li>
          <li><a href="#"><i class="ti-dribbble"></i></a></li>
          <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/masonry.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu3igG7JCAjro0yvCDE6cqZEWv0npIoBI"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/googlemap.js">

</script>

<?php wp_footer(); ?>

</body>
</html>
