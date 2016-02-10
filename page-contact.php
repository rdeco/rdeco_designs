<?php	
	/* 
		Template Name: Contact Page
	*/
	get_header(); ?>
		<div class="row">		  			  	
		  	<div class="contact col-xs-12"> 
				<?php
					if (have_posts()){
						while(have_posts()){
							the_post();
				?>	
				<div class="row">
					<aside class="contact-img hidden-sm hidden-xs col-md-6">
						<?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail();
							} 
						?>						
					</aside>	  	
		 			<section class="contact col-sm-12 col-md-6">
						<h1 class="contact-title"><?php the_title(); ?></h1>
						<hr class="contact diamond-break">
						
		
						<div class="contact-content">	
							
						<?php the_content(); ?>
						</div>
					</section>
					<?php				
						}
					}
					?>
				</div><!-- .row -->
		  	</div> <!-- .col-xs-12 -->	
		</div>	
<?php get_footer(); ?>