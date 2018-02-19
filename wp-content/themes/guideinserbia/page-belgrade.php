<?php get_header();
 /* Template Name: Belgrade */ ?>
    <body>

		<div class="nav-container">
		</div>

		<div class="main-container">
              <section class="page-title page-title-1 image-bg overlay parallax">
      		        <div class="background-image-holder">
                      <?php $image = get_field('cover_image'); ?>
      		            <img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
      		        </div>
      		        <div class="container">
      		            <div class="row">
      		                <div class="col-sm-12 text-center">
      		                    <h2 class="uppercase mb0"><?php the_field('cover_heading'); ?></h2>
                              <h4><?php the_field('cover_text'); ?></h4>
      		                </div>
      		            </div>

      		        </div>


      		    </section>
        <section class="projects">
		        <div class="container">
		            <div class="masonry-loader">
		                <div class="col-sm-12 text-center">
		                    <div class="spinner"></div>
		                </div>
		            </div>
                <?php   $page_id = get_queried_object_id(); ?>
                <?php $the_query = new WP_Query( array( 'post_type' => 'belgrade' ) ); ?>
                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="row postcard pt30 mb30">
		            <div class="col-sm-6 col-md-5 masonry masonryFlyIn">
		                <div class="masonry-item project" data-filter="People">
		                    <div class="image-tile hover-tile text-center">
		                        <img alt="image" class="background-image" style="height: 325px !important; width: 443px !important;" src="<?php if ( has_post_thumbnail() ) { echo get_the_post_thumbnail_url(); } else {echo get_template_directory_uri() . '/img/team-1.jpg';} ?>">
		                        <div class="hover-state">
		                            <a href="<?php the_permalink(); ?>">
		                                <h3 class="uppercase mb8"><?php the_title(); ?></h3>
		                                <h6 class="uppercase"><?php the_field('masonery_text',$page_id);?></h6>
		                            </a>
		                        </div>

		                    </div>

		                </div>

		            </div>
                <div class="col-md-offset-1 col-sm-5 col-sm-offset-1 col-md-6" style="padding-left: 0%; margin-left: 5%;">
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?><br></h3></a>
                    <hr>
                    <p>
                      <?php the_excerpt(); ?>
                        <br>
                    </p>
                    <a class="btn-filled btn pull-right" href="<?php the_permalink(); ?>"><?php the_field('button_text',$page_id);?></a>
                </div>
              </div>
            <?php endwhile; endif; ?>
		        </div>

		    </section>
      </div>

<?php get_footer(); ?>
