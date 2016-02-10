<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>
		<?php wp_head(); ?>
		<script>
			var $ = jQuery;
		</script>
	</head>
	<body <?php body_class(); ?>>
		<div class="header-wrapper">
		<header class="container-fluid">
		  	<div class="row">			  	
			  	<div id="st-container" class="st-container">
				  												
					<?php
						$args = array(
							'theme-location'	=> 'primary-menu',
							'container'			=> 'nav',
							'container_class'	=> 'st-menu st-effect-1',
							'container_id'		=> 'menu-1',
							'link_after'      	=> '<hr class="menu-hr">'
						);
						wp_nav_menu( $args );	
					?>  
					
					<!-- content push wrapper -->
					<div class="st-pusher">
						<div class="st-content"><!-- this is the wrapper for the content -->
							<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
								<!-- the content -->
							
								<div class="main clearfix">
									<div id="st-trigger-effects" class="column">
										
										<button class="menu-btn" data-effect="st-effect-1">		
										<img class="menu-btn-img" src="<?php print IMAGES; ?>/rdeco-btn.png" alt= "<?php bloginfo('name'); ?>">									
											<span>Menu</span>
										</button>
									</div>
								</div>
							</div><!-- /st-content-inner -->
						</div><!-- /st-content -->				
					</div><!-- /st-pusher -->				
				</div><!-- /st-container -->
		  	</div><!-- .row -->
		</div>
		</header><!-- .container-fluid -->	