<?php get_header(); ?>			  	
		  	
	<div class="blog-page">  
	  	<div class="row">
		  	<div id="container" class="col-xs-12 container intro-effect-fadeout">
				<?php 
					if (have_posts()) {
						while (have_posts()) {
							the_post();	
				?>				  	
			  	<header class="header">
				  	
				  	<div class="bg-img">
					  	<?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail();
							}
						?>
				  	</div>
				  	<div class="title">
					  	<h1><?php the_title(); ?></h1>
					  	<div class="author-meta">
							<?php echo get_avatar( get_the_author_meta('user_email'), '85' ); ?>
					
							<div class="blog-page-date">
								<i class="fa fa-calendar"></i><?php the_date(); ?>
							</div>
							
							<h2 class="blog-page-author">By: <?php the_author(); ?></h2>
							
							<hr class="diamond-break single">
					  	</div>
			  		</div>
			  	</header>	
			  			  	
			  	<button class="trigger" data-info="Click to see article">
			  		<span > trigger </span>
			  	</button>
			
			  	<article class="col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-3 content ">			  	
				  	<?php the_content(); ?>						  				  	
			  	</article>
			  	
					<nav class="col-xs-12 text-center pagination">			
						<?php previous_post_link(); ?>
							<a href="<?php bloginfo('url'); ?>/blog"><i class="fa fa-th"></i></a>
						<?php next_post_link(); ?>
					</nav>			  	
			  	
				<?php
						}
					}
				?>	
										
			
		  	</div><!-- col-xs-12 container intro-effect-fadeout -->	

	  	</div><!-- .row -->
	</div><!-- .blog-page  -->		
<?php get_footer(); ?>



