
<?php get_header(); ?>
<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
		<?php echo the_title(); ?>
		<?php echo the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>
		<div class="main-container">
		<section class="bg-primary background-multiply pt240 pb240 pt-xs-120 pb-xs-120 overlay image-bg parallax">
		    <div class="background-image-holder">
		        <img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/home24.jpg">
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
		                <img alt="Logo" class="image-small mb40 mb-xs-0" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.png">
		                <h4 class="mb56 mb-xs-24">
		                    Foundry is a digital design collective, tailoring experiences in web and print for clients all around the globe.
		                </h4>
		                <a class="btn btn-lg btn-white mb0" href="#">Make An Enquiry</a>
		            </div>
		        </div>
		    </div>
		</section>
		<section style="padding-bottom: 0%;">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-10 col-sm-offset-1 text-center">
		                    <h3 class="uppercase color-primary mb40 mb-xs-24">A Place To Call Home</h3>
		                    <p class="lead">
		                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
		                    </p>
		                </div>
		            </div>

		        </div>

		    </section>
        <section class="projects" style="padding-bottom: 0%;">
		        <div class="container">
		            <div class="masonry-loader">
		                <div class="col-sm-12 text-center">
		                    <div class="spinner"></div>
		                </div>
		            </div>
		            <div class="row masonry masonryFlyIn">
		                <div class="col-sm-6 masonry-item project" data-filter="People">
		                    <div class="image-tile hover-tile text-center">
		                        <img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/team-1.jpg">
		                        <div class="hover-state">
		                            <a href="#">
		                                <h3 class="uppercase mb8">Office Space</h3>
		                                <h6 class="uppercase">Technology / Photography</h6>
		                            </a>
		                        </div>
		                    </div>
                        <div class="title mb16">
                        <p class="mb0 text-center lead" style="margin-top:4%;">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                        </p>
                      </div>
		                </div>
		                <div class="col-sm-6 masonry-item project" data-filter="People">
		                    <div class="image-tile hover-tile text-center">
		                        <img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/team-2.jpg">
		                        <div class="hover-state">
		                            <a href="#">
		                                <h3 class="uppercase mb8">Terrarium</h3>
		                                <h6 class="uppercase">San Jose / CA</h6>
		                            </a>
		                        </div>
		                    </div>
                        <p class="mb0 text-center lead" style="margin-top:4%;">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                        </p>
		                </div>
		            </div>

		        </div>

		    </section>
<!-- FUTURE WIDGET -->
			<section style="padding-top: 3%;">
		        <div class="container">


		            <div class="row">
		                <div class="col-md-4 col-sm-6">
		                    <div class="pricing-table pt-2 text-center">
		                        <h5 class="uppercase">Starter</h5>

		                        <p class="lead">Per Month</p>
		                        <a class="btn btn-filled btn-lg" href="#">Get Started</a>
		                        <ul>
		                            <li>
		                                <strong>Unlimited</strong> access to content
		                            </li>
		                            <li>
		                                <strong>Fully Secure</strong> online backup
		                            </li>
		                            <li>
		                                <strong>One Year</strong> round the clock support
		                            </li>
		                            <li>
		                                <strong>FREE</strong> complimentary lanyard
		                            </li>
		                        </ul>
		                    </div>

		                </div><div class="col-md-4 col-sm-6">
		                    <div class="pricing-table pt-2 text-center">
		                        <h5 class="uppercase">Starter</h5>

		                        <p class="lead">Per Month</p>
		                        <a class="btn btn-filled btn-lg" href="#">Get Started</a>
		                        <ul>
		                            <li>
		                                <strong>Unlimited</strong> access to content
		                            </li>
		                            <li>
		                                <strong>Fully Secure</strong> online backup
		                            </li>
		                            <li>
		                                <strong>One Year</strong> round the clock support
		                            </li>
		                            <li>
		                                <strong>FREE</strong> complimentary lanyard
		                            </li>
		                        </ul>
		                    </div>

		                </div><div class="col-md-4 col-sm-6">
		                    <div class="pricing-table pt-2 text-center">
		                        <h5 class="uppercase">Starter</h5>

		                        <p class="lead">Per Month</p>
		                        <a class="btn btn-filled btn-lg" href="#">Get Started</a>
		                        <ul>
		                            <li>
		                                <strong>Unlimited</strong> access to content
		                            </li>
		                            <li>
		                                <strong>Fully Secure</strong> online backup
		                            </li>
		                            <li>
		                                <strong>One Year</strong> round the clock support
		                            </li>
		                            <li>
		                                <strong>FREE</strong> complimentary lanyard
		                            </li>
		                        </ul>
		                    </div>

		                </div>


		            </div>

		        </div>

		    </section>

<?php get_footer(); ?>
