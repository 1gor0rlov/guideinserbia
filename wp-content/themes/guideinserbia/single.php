<?php get_header(); ?>
<?php $location = get_field('map'); ?>

<div class="main-container">
	<?php if (get_field('cover') == 'map') { ?>
	<section class="image-bg bg-dark parallax overlay pt180 pb180" id="mapsection" >
				 <div class="acf-map" id="mymap">
					 <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>

				 </div>

				<div class="container pt180 pb180" id="mytext">
						<div class="row">
								<div class="col-sm-12 text-center" >
										<h2 class="uppercase mb8 excursion_name_map"><?php the_title(); ?></h2>
										<h3><?php the_field('cover_text'); ?></h3>

								</div>
						</div>

				</div>

		</section >
	<?php } else if (get_field('cover') == 'image') { ?>
		<section class="page-title page-title-1 image-bg overlay parallax">
				<div class="background-image-holder">
						<?php $image = get_field('cover_image'); ?>
						<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
				</div>
				<div class="container">
						<div class="row">
								<div class="col-sm-12 text-center excursion_name">
										<h2 class="uppercase mb0"><?php the_title(); ?></h2>
										<h4><?php the_field('cover_text'); ?></h4>
								</div>
						</div>

				</div>
		</section>
	<?php } ?>

		<section style="padding-bottom: 0px;">
		        <div class="container">
		            <div class="row">
									<hr>
		                <div class="col-md-9 mb-xs-24">
		                    <div class="post-snippet  ">

														<?php if( get_field('quote') ): ?>
														<blockquote>
															<?php the_field('quote'); ?>
														</blockquote>
														<?php endif; ?>
		                        <h5 class="single-text">
															<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  																			the_content();
															endwhile; endif; ?>
		                        </h5>
		                    </div>
										</div>

												<div class="col-md-3">
													<div class="widget informations">
															<?php if( get_field('sidebar_name') ): ?>
															<h4><?php the_field('sidebar_name'); ?></h4>
															<?php endif; ?>
															<?php if( get_field('sidebar_heading_1') ): ?>
															<hr>
															<h6 class="title"><?php the_field('sidebar_heading_1'); ?></h6>
															<hr>
															<p>
																<?php the_field('sidebar_text_1'); ?>
															</p>
															<?php endif; ?>
															<?php if( get_field('sidebar_heading_2') ): ?>
															<hr>
															<h6 class="title"><?php the_field('sidebar_heading_2'); ?></h6>
															<hr>
															<p>
																<?php the_field('sidebar_text_2'); ?>
															</p>
															<?php endif; ?>
															<?php if( get_field('sidebar_heading_3') ): ?>
															<hr>
															<h6 class="title"><?php the_field('sidebar_heading_3'); ?></h6>
															<hr>
															<p>
																<?php the_field('sidebar_text_3'); ?>
															</p>
															<?php endif; ?>
													</div>
													<!--end of widget-->
													<?php if( ot_get_option( 'contact_button' ) == 'on' ): ?>
													<div class="modal-container">
																<div class="text-center">
																	<a href="#" class="btn-filled btn btn-modal"><?php echo ot_get_option( 'contact_button_text' ); ?></a>
																</div>
                                <div class="foundry_modal text-center">
                                    <h3 class="uppercase"><?php echo ot_get_option( 'contact_form_heading' ); ?></h3>
                                    <p class="lead mb48">
                                        <?php echo ot_get_option( 'contact_form_text' ); ?>
																			<a href="<?php echo get_page_link( ot_get_option( 'contact_form_link' )); ?>"><?php echo ot_get_option( 'contact_form_link_text' ); ?></a>
                                    </p>

																		<div class="text-center contact_form">
																			<?php echo do_shortcode('[contact-form-7 id="77" title="Contact Form 1"]'); ?>
																		</div>
                                </div>
                            </div>
												<?php endif; ?>
												</div>
		            </div>
								<hr>
		        </div>
		    </section>
				<section class="single-gallery">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="lightbox-grid square-thumbs" data-gallery-title="Gallery">
		                        <ul>
															<?php $image = get_field('gallery_image_1'); ?>
															<?php if( $image ): ?>
															<li>
																<a href="<?php echo $image['url']; ?>" data-lightbox="true">
																		<div class="background-image-holder">
																			<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
																		</div>
																</a>
															</li>
															<?php endif; ?>
															<?php $image = get_field('gallery_image_2'); ?>
															<?php if( $image ): ?>
															<li>
																<a href="<?php echo $image['url']; ?>" data-lightbox="true">
																		<div class="background-image-holder">
																			<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
																		</div>
																</a>
															</li>
															<?php endif; ?>
															<?php $image = get_field('gallery_image_3'); ?>
															<?php if( $image ): ?>
															<li>
																<a href="<?php echo $image['url']; ?>" data-lightbox="true">
																		<div class="background-image-holder">
																			<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
																		</div>
																</a>
															</li>
															<?php endif; ?>
															<?php $image = get_field('gallery_image_4'); ?>
															<?php if( $image ): ?>
															<li>
																<a href="<?php echo $image['url']; ?>" data-lightbox="true">
																		<div class="background-image-holder">
																			<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
																		</div>
																</a>
															</li>
															<?php endif; ?>
															<?php $image = get_field('gallery_image_5'); ?>
															<?php if( $image ): ?>
															<li>
																<a href="<?php echo $image['url']; ?>" data-lightbox="true">
																		<div class="background-image-holder">
																			<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
																		</div>
																</a>
															</li>
															<?php endif; ?>
															<?php $image = get_field('gallery_image_6'); ?>
															<?php if( $image ): ?>
															<li>
																<a href="<?php echo $image['url']; ?>" data-lightbox="true">
																		<div class="background-image-holder">
																			<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
																		</div>
																</a>
															</li>
															<?php endif; ?>
															<?php $image = get_field('gallery_image_7'); ?>
															<?php if( $image ): ?>
															<li>
																<a href="<?php echo $image['url']; ?>" data-lightbox="true">
																		<div class="background-image-holder">
																			<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
																		</div>
																</a>
															</li>
															<?php endif; ?>
															<?php $image = get_field('gallery_image_8'); ?>
															<?php if( $image ): ?>
															<li>
																<a href="<?php echo $image['url']; ?>" data-lightbox="true">
																		<div class="background-image-holder">
																			<img alt="Background Image" class="background-image" src="<?php echo $image['url']; ?>">
																		</div>
																</a>
															</li>
															<?php endif; ?>
		                        </ul>
		                    </div>

		                </div>
		            </div>

		        </div>

		    </section>

			</div>


<?php get_footer(); ?>
