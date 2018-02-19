<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<div class="main-container">
  <section class="image-bg overlay parallax contact_section">
    <div class="background-image-holder">
        <img alt="Background" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/sky2.jpg">
    </div>
    <div class="container">
      <div class="row v-align-children">
        <div class="col-sm-6 col-md-5">
          <h2 class="uppercase">
            The Perfect Place To Call Home
          </h2>
        </div>
        <div class="col-sm-6 col-md-offset-1 p0">
          <div class="col-sm-4 text-center fadeOnLoad1">
            <a class="icons" href="#">
              <div class="feature bordered mb30 hvr-grow-shadow">
                <i class="fab fa-vk icon"></i>
                <h5 class="uppercase">
                  ВКонтакте
                </h5>
              </div>
            </a>
          </div>
          <!--end 6 col-->
          <div class="col-sm-4 text-center fadeOnLoad2">
            <a class="icons" href="//wwww.facebook.com">
              <div class="feature bordered mb30 hvr-grow-shadow">
                <i class="ti-facebook icon"></i>
                <h5 class="uppercase">
                  Facebook
                </h5>
              </div>
            </a>
          </div>
          <!--end 6 col-->
          <div class="col-sm-4 text-center fadeOnLoad3">
            <a class="icons" href="#">
              <div class="feature bordered mb30 hvr-grow-shadow">
                <i class="fas fa-plane icon"></i>
                <h5 class="uppercase">
                  Тонкости туризма
                </h5>
              </div>
            </a>
          </div>
          <!--end 6 col-->
          <div class="col-sm-6 text-center fadeOnLoad4">
            <a c="icons" href="tel:">
              <div class="feature bordered mb30 hvr-grow-shadow">
                <i class="fab fa-whatsapp icon"></i>
                <h5 class="uppercase">
                  WhatsApp
                </h5>
              </div>
            </>
          </div>
          <!--end 6 col-->
          <div class="col-sm-6 text-center fadeOnLoad5">
            <a class="icons" href="mailto:">
              <div class="feature bordered mb30 hvr-grow-shadow">
                <i class="far fa-envelope icon"></i>
                <h5 class="uppercase">
                  E-mail
                </h5>
              </div>
            </a>
          </div>
          <!--end 6 col-->
        </div>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <section class="pt16 pb16">
    <div class="container text-center">
      <h3 class="uppercase pt16">OR</h3>
    </div>
  </section>
  <section class="pt16 pb50">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contactform text-center">
            <?php echo do_shortcode('[contact-form-7 id="77" title="Contact Form 1"]'); ?>
          </div>
        </div>
        <div class="col-md-6 text-right contact_second_text">
          <h2 class="uppercase">
            The Perfect Place To Call Home
          </h2>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
