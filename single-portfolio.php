<?php
	

 get_header(); ?>			  	
	<!-- start of front page content-->			  	
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
				<div class="col-lg-8 col-lg-offset-2 single-portfolio-para text-center">
					<?php the_content(); ?>	 
					
					<div class="btn-nav">
						<a class="btn btn-defaul btn-lg active" href="#" role="button">screen shots</a> 
						<a class="btn btn-defaul btn-lg" href="#" role="button">mock-ups</a> 
						<a class="btn btn-defaul btn-lg" href="#" role="button">see website</a> 
					</div>
				</div> <!-- col-lg-8 col-lg-offset-2 single-portfolio-para text-center -->	
			
				
				
			</div> <!--row -->					
			<div class="row">		
				<div class="col-xs-12 main">		
					<ul id="og-grid" class="og-grid">
						

						<li>
							<a href="#" 
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
					
			
						<li>
							<a href="#" 
								data-largesrc="<?php if (has_post_thumbnail(  $post_thumbnail_id->ID ) ): 
												$image = wp_get_attachment_image_src( get_post_thumbnail_id(  $post_thumbnail_id->ID ), 'secondary-thumbnail' ); 
												echo $image[0];
												endif; 
											?>" 
												
								alt= "<?php bloginfo('name'); ?>" 					
								data-title="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'secondary-thumbnail', 			get_queried_object_id() );
												$post_thumbnail_post = get_post( $post_thumbnail_id );
												$caption = trim( strip_tags( $post_thumbnail_post->post_excerpt ) );
												$title = get_the_title( $post_thumbnail_post );												
												echo esc_html( $title ); 
								?>" 
								data-description="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'secondary-thumbnail', get_queried_object_id() );
												$post_thumbnail_post = get_post( $post_thumbnail_id );
												$caption = trim( strip_tags( $post_thumbnail_post->post_content) );
												$title = get_the_title( $post_thumbnail_post );
												echo esc_html( $caption );
 								?>">
								<img class="portfolio-image"  src="<?php if (class_exists('MultiPostThumbnails')) :
																		MultiPostThumbnails::the_post_thumbnail(
																			get_post_type(),
																			'secondary-thumbnail'
																		);
																	endif; ?>"
							</a>
						</li>
											
						<li>
							<a href="#" 
								data-largesrc="<?php
													$thumb_id =  wp_get_attachment_url('third-thumbnail');
													$thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
													echo $thumb_url[0];
													?>" 
								alt= "<?php bloginfo('name'); ?>" 					
								data-title="<?php echo get_post(get_post_thumbnail_id())->post_title; ?>" 
								data-description="<?php echo get_post(get_post_thumbnail_id())->post_content; ?>">
								<img class="portfolio-image"  src="<?php if (class_exists('MultiPostThumbnails')) :
																		MultiPostThumbnails::the_post_thumbnail(
																			get_post_type(),
																			'third-thumbnail'
																		);
																	endif; ?>"
							</a>
						</li>
						<li>
							<a href="#" 
								data-largesrc="<?php
													$thumb_id =  wp_get_attachment_url('fourth-thumbnail');
													$thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
													echo $thumb_url[0];
													?>" 
								alt= "<?php bloginfo('name'); ?>" 					
								data-title="<?php echo get_post(get_post_thumbnail_id())->post_title; ?>" 
								data-description="<?php echo get_post(get_post_thumbnail_id())->post_content; ?>">
								<img class="portfolio-image"  src="<?php if (class_exists('MultiPostThumbnails')) :
																		MultiPostThumbnails::the_post_thumbnail(
																			get_post_type(),
																			'fourth-thumbnail'
																		);
																	endif; ?>"
							</a>				
						</li>
						<li>
							<a href="#" 
							data-largesrc="<?php
												$thumb_id =  wp_get_attachment_url('fifth-thumbnail');
												$thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
												echo $thumb_url[0];
												?>" 
							alt= "<?php bloginfo('name'); ?>" 					
							data-title="<?php echo get_post(get_post_thumbnail_id())->post_title; ?>" 
							data-description="<?php echo get_post(get_post_thumbnail_id())->post_content; ?>">
							<img class="portfolio-image"  src="<?php if (class_exists('MultiPostThumbnails')) :
																	MultiPostThumbnails::the_post_thumbnail(
																		get_post_type(),
																		'fifth-thumbnail'
																	);
																endif; ?>"
							</a>					
						</li> 
						<li>
							<a href="#" 
								data-largesrc="<?php
													$thumb_id =  wp_get_attachment_url('sixth-thumbnail');
													$thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
													echo $thumb_url[0];
													?>" 
								alt= "<?php bloginfo('name'); ?>" 					
								data-title="<?php echo get_post(get_post_thumbnail_id())->post_title; ?>" 
								data-description="<?php echo get_post(get_post_thumbnail_id())->post_content; ?>">
								<img class="portfolio-image"  src="<?php if (class_exists('MultiPostThumbnails')) :
																		MultiPostThumbnails::the_post_thumbnail(
																			get_post_type(),
																			'sixth-thumbnail'
																		);
																	endif; ?>"
							</a>					
						</li>				
						<li>
							<a href="#" 
								data-largesrc="<?php
													$thumb_id =  wp_get_attachment_url('seventh-thumbnail');
													$thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
													echo $thumb_url[0];
													?>" 
								alt= "<?php bloginfo('name'); ?>" 					
								data-title="<?php echo get_post(get_post_thumbnail_id())->post_title; ?>" 
								data-description="<?php echo get_post(get_post_thumbnail_id())->post_content; ?>">
								<img class="portfolio-image"  src="<?php if (class_exists('MultiPostThumbnails')) :
																		MultiPostThumbnails::the_post_thumbnail(
																			get_post_type(),
																			'seventh-thumbnail'
																		);
																	endif; ?>"
							</a>				
						</li>			
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

