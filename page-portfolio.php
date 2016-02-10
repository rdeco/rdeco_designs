<?php
	
	/* 
		Template Name: Portfolio Page
	*/

	get_header(); ?>
	<section id="portfolio-container" class="portfolio-container">		
		<div class="row portfolio-contentwrapper">
			<section class="col-md-12 col-lg-8 col-lg-offset-2 ff-container">

			
					<input id="select-type-all" name="radio-set-1" type="radio" class="ff-selector-type-all" checked="checked" />
					<label for="select-type-all" class="ff-label-type-all">All</label>
					
					<input id="select-type-1" name="radio-set-1" type="radio" class="ff-selector-type-1" />
					<label for="select-type-1" class="ff-label-type-1">Website Design</label>
					
					<input id="select-type-2" name="radio-set-1" type="radio" class="ff-selector-type-2" />
					<label for="select-type-2" class="ff-label-type-2">Web page</label>
					
					<input id="select-type-3" name="radio-set-1" type="radio" class="ff-selector-type-3" />
					<label for="select-type-3" class="ff-label-type-3">Illustration</label>
								
			
					<div class="clr"></div>
	
					<ul class="ff-items">
					<hr class="diamond-break">	
						<li class="ff-item-type-1 caption-hover">
							<a href="http://www.rdecodesigns.com/portfolio/estranged/">
							
								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/estranged.png" alt= "<?php bloginfo('name'); ?>">
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>Estranged</span>	
									</h2>
									<p class="description"> description of image</p>
								</figcaption>	
							</a>
						</li>														
						
						<li class="ff-item-type-1 caption-hover">
							<a href="http://www.rdecodesigns.com/portfolio/the-static-age/">
								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/the-static-age.png" alt= "<?php bloginfo('name'); ?>">								
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>The Static age</span>
									</h2>
									<p class="description"> description of image</p>
								</figcaption>							
							</a>
						</li>
						
											
						<li class="ff-item-type-1 caption-hover">
							<a href="http://www.rdecodesigns.com/portfolio/scattered-dreams/?preview=true&preview_id=418&preview_nonce=31f9430dd2">
								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/scattered-dreams.png" alt= "<?php bloginfo('name'); ?>">							
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>Scattered Dreams</span>
									</h2>
									<p class="description"> description of image</p>
								</figcaption>	
							</a>																
						</li>
			
						<li class="ff-item-type-1 caption-hover">
							<a  href="http://www.rdecodesigns.com/portfolio/stray-heart/">							
								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/stray-heart.png" alt= "<?php bloginfo('name'); ?>">							
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>Stray Heart</span>
									</h2>
									<p class="description"> description of image</p>
								</figcaption>								
							</a>
						</li>							
														
						<li class="ff-item-type-1 caption-hover">
							<a href="http://www.rdecodesigns.com/portfolio/r-deco-jewelry/">							
								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/rdeco-jewelry.png" alt= "<?php bloginfo('name'); ?>">	
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>R.Deco Jewelry</span>									
									</h2>
									<p class="description"> description of image</p>
								</figcaption>																
							</a>
						</li>
						
						<li class="ff-item-type-3 caption-hover">
							<a href="http://www.rdecodesigns.com/portfolio/r-deco-designs-logo/">								
								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/rdeco-designs-logo.png" alt= "<?php bloginfo('name');  ?>">	
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>R.Deco Designs logo</span>									
									</h2>
									<p class="description"> description of image</p>
								</figcaption>											
							</a>
						</li>	
												
						<li class="ff-item-type-1 caption-hover">
							<a href="http://www.rdecodesigns.com/portfolio/r-deco-designs/">
								
								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/rdeco-designs.png" alt= "<?php bloginfo('name'); ?>">	
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>R.Deco Designs</span>
									</h2>
									<p class="description"> description of image</p>
								</figcaption>									
											
							</a>
						</li>														
															
						<li class="ff-item-type-3 caption-hover">
							<a href="http://www.rdecodesigns.com/portfolio/r-deco-designs-illustration/">
								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/rdeco-designs-illustration.png" alt= "<?php bloginfo('name');  ?>">	
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>Illustration</span>
									</h2>
									<p class="description"> description of image</p>
								</figcaption>																
											
							</a>
						</li>	
						<li class="ff-item-type-2 caption-hover">
							<a href="http://www.rdecodesigns.com/portfolio/404-error-page/">

								<figure class="image-container">	
									<img src="<?php print IMAGES; ?>/rdeco-designs-404.jpg" alt= "<?php bloginfo('name'); ?>">		
								</figure>

								<figcaption class="caption-container">
									<h2>
										<span>404 Web Page Example</span>
									</h2>
									<p class="description"> description of image</p>
								</figcaption>									
										
							</a>
						</li>
													
					</ul>	
			
			</section>		
		</div><!-- /ps-slidewrapper -->		
	</section><!-- /ps-container -->								
<?php get_footer(); ?>