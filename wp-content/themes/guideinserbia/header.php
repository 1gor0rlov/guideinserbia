
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Guide In Serbia | Tours Across Serbia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
  		<div class="nav-container">
        <nav class="nav_sett">
		      <div class="nav-bar">
		        <div class="module left nav_logo">
		          <a href="index.html" class="nav_logo">
		            <img class="logo logo-dark" alt="Foundry" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
		          </a>
		        </div>
		        <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
		          <i class="ti-menu icon"></i>
		        </div>
		        <div class="module-group right">
		          <div class="module left menu">
		            <?php wp_nav_menu( array( 'theme_location' => 'left-menu' ) ); ?>
		          </div>
		        </div>
		      </div>
		    </nav>
  		</div>
