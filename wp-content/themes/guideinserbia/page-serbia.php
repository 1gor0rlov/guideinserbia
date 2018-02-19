<?php get_header();
 /* Template Name: Serbia */ ?>

  <div class="main-container">
    <section class="page-title page-title-1 image-bg overlay parallax">
      <div class="background-image-holder">
        <?php $image = get_field('cover_image'); ?>
      	<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
      </div>
      <div class="container">
        <div class="row">
      		<div class="col-sm-12 text-center">
      		  <h2 class="uppercase mb0">
              <?php the_field('cover_heading'); ?>
            </h2>
            <h4>
              <?php the_field('cover_text'); ?>
            </h4>
      		</div>
        </div>
      </div>
    </section>
    <section class="projects">
		  <div class="container">
        <?php //$page_id = get_queried_object_id(); ?>
        <?php // $the_query = new WP_Query( array( 'post_type' => 'serbia' ) ); ?>
        <?php //if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="row">
            <div class="col-md-4 text-center">
              <div style="margin-left: 20px;margin-right: 20px;height: 450px;box-shadow:0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                <div style="height: 15px;">

                </div>
                <div style="height: 275px; border:1px solid black;">

                </div>
                <div style="height: calc( ( 100% - 275px ) - 15px );">

                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div style="margin-left: 20px;margin-right: 20px;height: 450px; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
                <div style="height: 275px; border:1px solid black;margin-top: 10px;">

                </div>
                <div style="height: calc( ( 100% - 275px ) - 10px );">

                </div>
              </div>
            </div>
            <div class="col-xs-4 text-center">
              <div class="" style="margin-left: 20px;margin-right: 20px;height: 535px;box-shadow:0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);border-bottom: 5px solid #009688;">
                <div style="height: 5px;">

                </div>
                <div style="height: 312px;background: url('http://www.guideinserbia.com/wp-content/uploads/2017/06/thumbnail1.jpg');">

                </div>
                <div style="height: calc( ( 100% - 275px ) - 50px );">
                  <div style="position: relative; text-align: center;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/grad.jpg" style="opacity: 0.2; margin-top: 70px; ">
                    <div style="position: absolute; top:0; width: 100%; margin-top: 12%;">
                      <h3 style="text-transform: uppercase;font-size: 38px;color: #005D53;;letter-spacing: 2px;">ДВА ГОРОДА</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-4 text-center">
              <div style="margin-left: 20px;margin-right: 20px;height: 535px;box-shadow:0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);border-bottom: 5px solid #009688;">
                <div style="height: 5px;">

                </div>
                <div style="height: 312px;background: url('http://www.guideinserbia.com/wp-content/uploads/2017/06/thumbnail1.jpg');">

                </div>
                <div style="height: calc( ( 100% - 275px ) - 50px );">
                  <div style="position: relative; text-align: center;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/grad.jpg" style="opacity: 0.2; margin-top: 70px; ">
                    <div style="position: absolute; top:0; width: 100%; margin-top: 12%;">
                      <h3 style="text-transform: uppercase;font-size: 38px;color: #005D53;;letter-spacing: 2px;">ДВА ГОРОДА</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php // endwhile; endif; ?>
		  </div>
		</section>
  </div>

<?php get_footer(); ?>
