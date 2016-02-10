<?php get_header(); ?>
	<!-- start of front page content-->	
	<div class="front-page container-fluid">
		<div class="row">
		  	<?php 
			  	if ( have_posts() ) { 
					while ( have_posts() ) { 
					the_post(); 
			?>		
			<div class="left col-md-6 col-sm-12">
				<div class="text-wrapper">
					<img class="rdeco-logo img-responsive visible-xs-block visible-sm-block" src="<?php print IMAGES; ?>/rdeco-designs-logo-raspberry-200.png" alt= "<?php bloginfo('name'); ?>">						
					<?php the_content(); ?>
				</div>
				<div class="img-left-wrapper">

					<img class="front-page-img img-responsive" src="<?php print IMAGES; ?>/rdeco-muse.png" alt= "<?php bloginfo('name'); ?>">								
				
				</div>
			</div>
			<div class="right col-md-6 ">
				<!--<a  class="" href="<?php bloginfo('url'); ?>/?p=200"> -->
				<div class="img-right-wrapper">
					<a  class="logo-link" href="<?php bloginfo('url'); ?>/?p=200">
					<?php 
							if (has_post_thumbnail()) {
							the_post_thumbnail();
						}
					?>	
					</a>
				</div>
				
			</div>	
			<?php 
		  		}
		  	}
		?>	  	
		</div><!-- .row -->
	</div><!--  .container-fluid -->
<?php get_footer(); ?>	



				
	  