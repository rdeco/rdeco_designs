<?php	
	/* 
		Template Name: About Page
	*/ 
	get_header(); ?>	


		<div class="about-page container">
  		<?php
				if (have_posts()){
					while(have_posts()){
						the_post();
		  ?>	
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
  				
					<div class="side side-left">
						<div class="intro-content">

              <h1 class="about-title">
                <?php the_title(); ?>
              </h1>	
              																
  						<aside class="mb-wrap mb-style-2 about-left">
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
  							<div class="mb-attribution about-left">
  								<p class="mb-author about-left">
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
  							</div> <!-- .mb-atttribution-left -->					
  						</aside>
				    </div> <!-- .intro-content -->
            <div class="overlay"></div>
				  </div> <!-- .side .side-left -->
										
					<div class="side side-right">
						<div class="intro-content">

              <h1 class="about-title about-right">
    								<?php
    									$postmeta = get_post_meta($post->ID);
    									
    									if ( isset($postmeta['meta_box_title_field'][0]) ) {
    									    echo $postmeta['meta_box_title_field'][0];
    									}
    				        ?>
              </h1>																	
  						<aside class="mb-wrap mb-style-2 about-right">
  
  							<blockquote>
  								<p>

  								</p>
  							</blockquote>
  							<div class="mb-attribution about-right">
  								<p class="mb-author about-right">
  	
  								</p>

						    </div> <!-- mb-attribution -->				
						  </aside>
						</div> <!-- intro-content -->
						<div class="overlay"></div>
					</div> <!-- .side .side-right -->
				</div><!-- /intro -->
				
				<div class="page page-right">
					<div class="page-inner">
						<section>
            <?php echo rwmb_meta( 'rdeco-wysiwyg' ); ?>					
    				</section>
					</div><!-- /page-inner -->
				</div><!-- /page-right -->
				
				<div class="page page-left">
					<div class="page-inner">
						<section>
  						<?php the_content(); ?>
						</section>
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				
				<a href="#" class="back back-right" title="back to intro">&rarr;</a>
				<a href="#" class="back back-left" title="back to intro">&larr;</a>
			</div><!-- /splitlayout -->
			<?php 
  			  }
  			} 
  		?>
		</div><!-- /container -->

	
	
<?php get_footer(); ?>