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
				<div class="col-lg-8 col-lg-offset-2 single-portfolio-para text-center">
					<?php the_content(); ?>	 				
					<div class="btn-nav">
						<a class="screenshots btn btn-lg active" href="#" role="button">screen shots</a> 
						<a class="mockups btn btn-lg" href="#" role="button">mock-ups</a> 
						<a class="see-website btn btn-lg" href="http://www.rdecodesigns.com/estranged/" target="_blank" role="button">see website</a> 
					</div>
				</div> <!-- col-lg-8 col-lg-offset-2 single-portfolio-para text-center -->				
			</div> <!--row -->	
			<div class="row">		
				<div class="col-xs-12 main">	
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
					
			
						<li>
							<a href="#" 
								data-largesrc="<?php
													// first, get the image ID returned by ACF
													$image_id = get_field('screenshot_image_2');
													// and the image size you want to return
													$image_size = 'ug_big';
													// use wp_get_attachment_image_src to return an array containing the image
													// we'll pass in the $image_id in the first parameter
													// and the image size registered using add_image_size() in the second
													$image_array = wp_get_attachment_image_src($image_id, $image_size);
													// finally, extract and store the URL from $image_array
													$image_url = $image_array[0];
													 echo $image_url; 
												 ?>" 
												
												alt= "<?php bloginfo('name'); ?>" 					
												data-title="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'secondary-thumbnail', get_queried_object_id() );
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
													// first, get the image ID returned by ACF
													$image_id = get_field('screenshot_image_3');
													// and the image size you want to return
													$image_size = 'ug_big';
													// use wp_get_attachment_image_src to return an array containing the image
													// we'll pass in the $image_id in the first parameter
													// and the image size registered using add_image_size() in the second
													$image_array = wp_get_attachment_image_src($image_id, $image_size);
													// finally, extract and store the URL from $image_array
													$image_url = $image_array[0];
													echo $image_url; 
												?>" 
												
												alt= "<?php bloginfo('name'); ?>" 					
												data-title="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'third-thumbnail', 			
																get_queried_object_id() );
																$post_thumbnail_post = get_post( $post_thumbnail_id );
																$caption = trim( strip_tags( $post_thumbnail_post->post_excerpt ) );
																$title = get_the_title( $post_thumbnail_post );												
																echo esc_html( $title ); 
												?>" 
												data-description="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'third-thumbnail', get_queried_object_id() );
																$post_thumbnail_post = get_post( $post_thumbnail_id );
																$caption = trim( strip_tags( $post_thumbnail_post->post_content) );
																$title = get_the_title( $post_thumbnail_post );
																echo esc_html( $caption );
				 								?>">
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
													// first, get the image ID returned by ACF
													$image_id = get_field('screenshot_image_4');
													// and the image size you want to return
													$image_size = 'ug_big';
													// use wp_get_attachment_image_src to return an array containing the image
													// we'll pass in the $image_id in the first parameter
													// and the image size registered using add_image_size() in the second
													$image_array = wp_get_attachment_image_src($image_id, $image_size);
													// finally, extract and store the URL from $image_array
													$image_url = $image_array[0];
													echo $image_url; 
												?>"  
												
											alt= "<?php bloginfo('name'); ?>" 					
											data-title="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'fourth-thumbnail', 			
															get_queried_object_id() );
															$post_thumbnail_post = get_post( $post_thumbnail_id );
															$caption = trim( strip_tags( $post_thumbnail_post->post_excerpt ) );
															$title = get_the_title( $post_thumbnail_post );												
															echo esc_html( $title ); 
											?>" 
											data-description="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'fourth-thumbnail', get_queried_object_id() );
															$post_thumbnail_post = get_post( $post_thumbnail_id );
															$caption = trim( strip_tags( $post_thumbnail_post->post_content) );
															$title = get_the_title( $post_thumbnail_post );
															echo esc_html( $caption );
			 								?>">
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
													// first, get the image ID returned by ACF
													$image_id = get_field('screenshot_image_5');
													// and the image size you want to return
													$image_size = 'ug_big';
													// use wp_get_attachment_image_src to return an array containing the image
													// we'll pass in the $image_id in the first parameter
													// and the image size registered using add_image_size() in the second
													$image_array = wp_get_attachment_image_src($image_id, $image_size);
													// finally, extract and store the URL from $image_array
													$image_url = $image_array[0];
													echo $image_url; 
												?>" 
												alt= "<?php bloginfo('name'); ?>" 					
												data-title="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'fourth-thumbnail', 			
																get_queried_object_id() );
																$post_thumbnail_post = get_post( $post_thumbnail_id );
																$caption = trim( strip_tags( $post_thumbnail_post->post_excerpt ) );
																$title = get_the_title( $post_thumbnail_post );												
																echo esc_html( $title ); 
												?>" 
												data-description="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'fifth-thumbnail', get_queried_object_id() );
																$post_thumbnail_post = get_post( $post_thumbnail_id );
																$caption = trim( strip_tags( $post_thumbnail_post->post_content) );
																$title = get_the_title( $post_thumbnail_post );
																echo esc_html( $caption );
				 								?>">
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
													// first, get the image ID returned by ACF
													$image_id = get_field('screenshot_image_6');
													// and the image size you want to return
													$image_size = 'ug_big';
													// use wp_get_attachment_image_src to return an array containing the image
													// we'll pass in the $image_id in the first parameter
													// and the image size registered using add_image_size() in the second
													$image_array = wp_get_attachment_image_src($image_id, $image_size);
													// finally, extract and store the URL from $image_array
													$image_url = $image_array[0];
													echo $image_url; 
												?>" 
												alt= "<?php bloginfo('name'); ?>" 					
												data-title="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'sixth-thumbnail', 			
																get_queried_object_id() );
																$post_thumbnail_post = get_post( $post_thumbnail_id );
																$caption = trim( strip_tags( $post_thumbnail_post->post_excerpt ) );
																$title = get_the_title( $post_thumbnail_post );												
																echo esc_html( $title ); 
												?>" 
												data-description="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'fourth-thumbnail', get_queried_object_id() );
																$post_thumbnail_post = get_post( $post_thumbnail_id );
																$caption = trim( strip_tags( $post_thumbnail_post->post_content) );
																$title = get_the_title( $post_thumbnail_post );
																echo esc_html( $caption );
				 								?>">
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
													// first, get the image ID returned by ACF
													$image_id = get_field('screenshot_image_7');
													// and the image size you want to return
													$image_size = 'ug_big';
													// use wp_get_attachment_image_src to return an array containing the image
													// we'll pass in the $image_id in the first parameter
													// and the image size registered using add_image_size() in the second
													$image_array = wp_get_attachment_image_src($image_id, $image_size);
													// finally, extract and store the URL from $image_array
													$image_url = $image_array[0];
													echo $image_url; 
												?>" 
											alt= "<?php bloginfo('name'); ?>" 					
											data-title="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'seventh-thumbnail', 			
															get_queried_object_id() );
															$post_thumbnail_post = get_post( $post_thumbnail_id );
															$caption = trim( strip_tags( $post_thumbnail_post->post_excerpt ) );
															$title = get_the_title( $post_thumbnail_post );												
															echo esc_html( $title ); 
											?>" 
											data-description="<?php $post_thumbnail_id = MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'fourth-thumbnail', get_queried_object_id() );
															$post_thumbnail_post = get_post( $post_thumbnail_id );
															$caption = trim( strip_tags( $post_thumbnail_post->post_content) );
															$title = get_the_title( $post_thumbnail_post );
															echo esc_html( $caption );
			 								?>">
											<img class="portfolio-image"  src="<?php if (class_exists('MultiPostThumbnails')) :
																					MultiPostThumbnails::the_post_thumbnail(
																						get_post_type(),
																						'seventh-thumbnail'
																					);
																				endif; ?>"
							</a>		
						</li>			
					</ul><!-- og-grid -->
					
					
					<ul id="og-grid" class="og-grid mockups-grid">
						<li>
							<?php the_field("mockup_image_1"); ?>																				
						</li>		
						<li>
							<?php the_field("mockup_image_2"); ?>
						</li>
											
						<li>
							<?php the_field("mockup_image_3"); ?>						
						</li>
						<li>
							<?php the_field("mockup_image_4"); ?>																		
								
						<li>
							<?php the_field("mockup_image_5"); ?>
						</li>
											
						<li>
							<?php the_field("mockup_image_6"); ?>						
						</li>
						<li>
							<?php the_field("mockup_image_7"); ?>						
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

