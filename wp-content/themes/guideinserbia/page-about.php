<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<div class="main-container">
  <section class="image-bg overlay parallax about_cover">
    <div class="background-image-holder">
        <img alt="Background" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/cover11.jpg">
    </div>
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="feature feature-1 boxed">
                  <div class="image-tile outer title text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/team-2.jpg" alt="">
                    <div class="title mb16 mt16">
                      <h4 class="uppercase mb16">
                        Saša Orlov
                      </h4>
                      <span>
                        Tour Guide
                       </span>
                    </div>
                    <p class="mb0">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="image-edge pb0">
		<div class="col-md-6 col-sm-4 p0">
		  <img alt="Screenshot" class="mb-xs-24" src="<?php echo get_template_directory_uri(); ?>/img/Cruze.png">
		</div>
		  <div class="container">
		    <div class="col-md-5 col-md-offset-1 col-sm-7 col-sm-offset-1 v-align-transform right">
		      <h3 class="large mb40 mb-xs-16">
            Clean, Usable Image Blocks.
          </h3>
		      <p>
            Left &amp; Right Variations Included
          </p>
		    </div>
		  </div>
	</section>
  <section class="image-edge pt0">
		<div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
		  <img alt="Screenshot" class="mb-xs-24" src="<?php echo get_template_directory_uri(); ?>/img/Vespa.png">
		</div>
		<div class="container">
		  <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
		    <h3 class="large mb40 mb-xs-16">
          Sleek, Smart and Modern.
        </h3>
		    <p>
          A timeless design to be proud of
        </p>
		  </div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
