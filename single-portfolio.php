<?php
 get_header(); ?>			  			  	
	<div class="row single-portfolio-img"> 
		<div class="col-sm-10 col-sm-offset-1  col-lg-8 col-lg-offset-2 single-portfolio-wrapper">
			<?php 				
				if(have_posts()) {
					while(have_posts()) {
					the_post();	
			?> 						
			<h1>
				<?php wp_title(' '); ?>
			</h1> 
			<hr class="diamond-break">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 single-portfolio-para text-center ff-container cl-effect-4">
					<?php the_content(); ?>	 				
					<div class="btn-nav">

					
						<a class="see-website btn btn-lg" href="<?php the_field('button_link'); ?><" target="_blank" role="button"><?php the_field('button_name'); ?></a> 
					
					
					</div>
				</div> <!-- col-lg-8 col-lg-offset-2 single-portfolio-para text-center -->				
			</div> <!--row -->	
			<div class="row">		
				<div class="col-xs-12 main">
  				<div class="clr"></div>	
					<ul id="og-grid" class="og-grid screenshots-grid">
  										
	
						<li>
							<a href="<?php the_permalink(); ?>" 
								data-largesrc="<?php
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
										echo $thumb_url[0];
									?>" 
									alt= "<?php bloginfo('name'); ?>" 
									data-title="<?php echo get_post(get_post_thumbnail_id())->post_title; ?>" 
										
									data-description="<?php echo get_post(get_post_thumbnail_id())->post_content; ?>">
									<img class="portfolio-image" src="<?php the_post_thumbnail(); ?>"
							</a>														
						</li>

						<?php 
							$meta = get_post_meta($post->ID,'',true);
							//die(print_r($meta,1));
							foreach( $meta as $metakey=>$metavalue ) {
								if( !strpos($metakey,'_thumbnail_id') ){
									continue;
								}
								
								$name = $metakey;
								$name = str_replace(get_post_type().'_','',$name);
								$name = str_replace('_thumbnail_id','',$name);
								
                                $post_thumbnail_id = $metavalue[0];
								$post_thumbnail_post = get_post( $metavalue[0] );
								$caption = trim( strip_tags( $post_thumbnail_post->post_excerpt ) );
								$title = get_the_title( $post_thumbnail_post );
								
								
								$image_id = $metavalue[0];
								$image_size = 'ug_big';
								// use wp_get_attachment_image_src to return an array containing the image
								// we'll pass in the $image_id in the first parameter
								// and the image size registered using add_image_size() in the second
								$image_array = wp_get_attachment_image_src($post_thumbnail_id, $image_size);
								// finally, extract and store the URL from $image_array
								$image_url = $image_array[0];
								
						?>
			
						<li>
							<a href="#" 
								data-largesrc="<?php  echo $image_url; ?>" 
								alt= "<?php bloginfo('name'); ?>" 					
								data-title="<?php echo esc_html( $title ); ?>" 
                                data-description="<?php echo esc_html( $caption ); ?>">
	                                
									<img class="portfolio-image"  src="<?php if (class_exists('MultiPostThumbnails')) :
									MultiPostThumbnails::the_post_thumbnail(get_post_type(), $name );
									endif; ?>">
							</a>
						</li>
						<?php
							};
							
						?>	
					</ul><!-- og-grid -->
					
									</div>	<!-- col-xs-12 -->
			</div> <!-- row -->
									    				    
		

			<nav class="pagination">
				<?php previous_post_link(); ?>  
					<a href="<?php bloginfo('url'); ?>/portfolio-2"><i class="fa fa-th-large"></i></a>
				<?php next_post_link(); ?>
			</nav>	
    
		    			<?php
					}	
				}	
			?>				
													
		</div>  <!-- col-md-12 col-lg-8 col-lg-offset-2  single-portfolio-wrapper -->	   			
	</div> <!-- row single-portfolio-img -->
<?php get_footer(); ?>			
