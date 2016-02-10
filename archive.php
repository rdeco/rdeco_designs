<?php 
	/*
		Template Name: Blog Archive
	*/
	get_header(); ?>			  	
	<!-- start of blog archive content-->			  	
	<div class="row blog-archive ">   				  				
		<div class="blog-grid-wrapper col-xs-12 col-lg-8 col-lg-offset-2">	
			
			<div class="blog-grid col-xs-12 col-lg-10 col-lg-offset-1">	
				<?php
		  			$args = array( 
						'post_type' => 'post',
						'posts_per_page' => -1
		  			);
		  			$loop = new WP_Query( $args );
		  				while ( $loop->have_posts() ) { 
			  				$loop->the_post();
		  		?>
				<a href="<?php the_permalink(); ?>">
				
					<article class="col-xs-4  col-md-3 blog-thumbnail">
						<h1 class="blog-title-h1"><?php the_title(); ?></h1>
						
						<div class="blog-excerpt">
							<?php the_excerpt(); ?>
						</div>
				
						<?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail();
							} 
						?>
						<aside class="blog-info ">
							<p class="blog-date"><?php the_date(); ?></p>
							<p class="author"><?php the_author(); ?></p>
						</aside>											
					</article> <!-- .col-md-2 .blog-thumbnail -->
				
				</a>
				<?php										
						
					}
				?>	
				
			</div><!-- blog-grid col-xs-12 col-lg-10 col-lg-offset-2 -->			
		</div><!-- blog-grid-wrapper col-xs-12 col-lg-8 col-lg-offset-2 -->	
	</div><!-- row blog-archive -->		
<?php get_footer(); ?>