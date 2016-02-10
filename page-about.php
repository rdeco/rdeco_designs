<?php	
	/* 
		Template Name: About Page
	*/ 
	get_header(); ?>			  	

		<div class="row">		  			  	
		  	<div class="about-page col-xs-12"> 	
		  		<?php
					if (have_posts()){
						while(have_posts()){
							the_post();
				?>	
				<div class="row">
					<aside class="about-img hidden-sm hidden-xs col-md-6">
						<?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail();
							} 
						?>						
					</aside>	  	
		 			<section class="about-page col-md-12 col-lg-6">
					<h1 class="about-title"><?php the_title(); ?></h1>																	
						<aside class="mb-wrap mb-style-2">

							<blockquote>
								<p>
									<?php
										$postmeta = get_post_meta($post->ID);
											if ( isset($postmeta['meta_box_quote_field'][0]) ) {
												echo $postmeta['meta_box_quote_field'][0];
											}
					                  ?>
								</p>
							</blockquote>
							<div class="mb-attribution">
								<p class="mb-author">
									<?php
										$postmeta = get_post_meta($post->ID);
										
										if ( isset($postmeta['meta_box_authorName_field'][0]) ) {
										    echo $postmeta['meta_box_authorName_field'][0];
										}
				                	?>
								</p>
								<cite>                          
								<?php
									$postmeta = get_post_meta($post->ID);
									
									if ( isset($postmeta['meta_box_quoteName_field'][0]) ) {
									    echo $postmeta['meta_box_quoteName_field'][0];
									}
				                ?>
				                </cite>
							</div>					
						</aside>
		
						<article class="page-para ">													
							<?php 	the_content(); 	 ?> 	
						</article>

					</section>
					<?php				
						}
					}
					?>
				</div><!-- .row -->
									
		  	</div>
		</div>

	
<?php get_footer(); ?>