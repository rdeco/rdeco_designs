<?php
	
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));	
define( 'IMAGES', TEMPPATH. "/imgs");


add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
;

/*---------------------------------------------------*
 * Enqueue stylesheets for css *
 *---------------------------------------------------*/
 
function rdeco_styles() {
	wp_enqueue_style ('main-css', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style ('bootstrap-min-css', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style ('bootstrap-theme-min-css', get_template_directory_uri().'/css/bootstrap-theme.min.css' );
	wp_enqueue_style ('normalize-css', get_template_directory_uri().'/css/normalize.css' );
	wp_enqueue_style ('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );	
		
	wp_enqueue_style ('googlefonts-css', 'https://fonts.googleapis.com/css?family=Playfair+Display|Raleway' );
	
}
add_action('wp_enqueue_scripts', 'rdeco_styles');

/*---------------------------------------------------*
 * Enqueue scripts for javascript *
 *---------------------------------------------------*/

function rdeco_scripts() {

    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), true, true);  
	wp_enqueue_script('classie-js', get_template_directory_uri().'/js/classie.js', array(), true, true);
    wp_enqueue_script('modernizr-79639-js', get_template_directory_uri().'/js/modernizr.custom.79639.js', array(), true, false);	
    
    wp_enqueue_script('sidebarEffects-js', get_template_directory_uri().'/js/sidebarEffects.js', array('modernizr-79639-js', 'classie-js'), true, true); 	
    wp_enqueue_script('grid-js', get_template_directory_uri().'/js/grid.js', array('jquery', 'modernizr-79639-js'), true, true); 	
    wp_enqueue_script('grid-theme-js', get_template_directory_uri().'/js/grid-theme.js', array('grid-js'), true, true);   

    wp_enqueue_script('single-portfolio-toggle-js', get_template_directory_uri().'/js/single-portfolio-toggle.js', array('jquery'), true, true); 	



	if(is_single()){
    	    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery', 'classie-js'), true, true);          			
	};	
    
    if(is_404()){
		wp_enqueue_script('jquery-color-js', get_template_directory_uri().'/js/jquery.color.js', array('jquery'), true, true);          
	    wp_enqueue_script('js-404-js', get_template_directory_uri().'/js/js-404.js', array('jquery-color-js'), true, true);          	
	};	
	
}
add_action('wp_enqueue_scripts', 'rdeco_scripts');

/*---------------------------------------------------*
 * Register Menus *
 *---------------------------------------------------*/
 
 function register_rdeco_menus() {
	 register_nav_menus(
		 array(
			 'primary-menu' =>  __( 'Primary Menu' )
		 )
	 );
 }
 add_action( 'init', 'register_rdeco_menus');
 

/**
* Adds support for meta box - general page - Quote
* -------------------------------------------------------------------
*/

  function rdeco_quote_field() {
      add_meta_box( 'meta-box-id-quote', 'Quote (general page only)', 'rdeco_field_quote', 'page', 'normal', 'high' );
  }

  add_action( 'add_meta_boxes', 'rdeco_quote_field' );

      function rdeco_field_quote( $post ) {
          $values = get_post_custom( $post->ID );
          $text = isset( $values['meta_box_quote_field'] ) ? esc_attr( $values['meta_box_quote_field'][0] ) : '';
  ?>
  <p>
      <label for="meta_box_text">Quote:  </label>
      <input type="text" name="meta_box_quote_field" id="meta_box_quote_field" value="<?php echo $text; ?>" />
  </p>

  <?php
  }


  add_action( 'save_post', 'rdeco_meta_box_save_quote' );
  function rdeco_meta_box_save_quote( $post_id ) {
      // Bail if we're doing an auto save
      if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

      // if our current user can't edit this post, bail
      if( !current_user_can( 'edit_post', $post_id ) ) return;

      // now we can actually save the data
      $allowed = array(
          'a' => array( // on allow a tags
              'href' => array() // and those anchors can only have href attribute
          )
      );

      // Make sure your data is set before trying to save it
      if( isset( $_POST['meta_box_quote_field'] ) )
          update_post_meta( $post_id, 'meta_box_quote_field', wp_kses( $_POST['meta_box_quote_field'], $allowed ) );

  }
/**
* Ends support for meta box - general page - Quote
* -------------------------------------------------------------------
*/

/**
* Adds support for meta box - general page - Quote Name
* -------------------------------------------------------------------
*/

  function rdeco_quoteName_field() {
      add_meta_box( 'meta-box-id-quoteName', 'Quote Source (general page only)', 'rdeco_field_quoteName', 'page', 'normal', 'high' );
  }

  add_action( 'add_meta_boxes', 'rdeco_quoteName_field' );

      function rdeco_field_quoteName( $post ) {
          $values = get_post_custom( $post->ID );
          $text = isset( $values['meta_box_quoteName_field'] ) ? esc_attr( $values['meta_box_quoteName_field'][0] ) : '';
  ?>
  <p>
      <label for="meta_box_text">Quote Source:  </label>
      <input type="text" name="meta_box_quoteName_field" id="meta_box_quoteName_field" value="<?php echo $text; ?>" />
  </p>

  <?php
  }


  add_action( 'save_post', 'rdeco_meta_box_save_quoteName' );
  function rdeco_meta_box_save_quoteName( $post_id ) {
      // Bail if we're doing an auto save
      if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

      // if our current user can't edit this post, bail
      if( !current_user_can( 'edit_post', $post_id ) ) return;

      // now we can actually save the data
      $allowed = array(
          'a' => array( // on allow a tags
              'href' => array() // and those anchors can only have href attribute
          )
      );

      // Make sure your data is set before trying to save it
      if( isset( $_POST['meta_box_quoteName_field'] ) )
          update_post_meta( $post_id, 'meta_box_quoteName_field', wp_kses( $_POST['meta_box_quoteName_field'], $allowed ) );

  }
/**
* Ends support for meta box - general page - Quote Name
* -------------------------------------------------------------------
*/

/**
* Adds support for meta box - general page - Author Name
* -------------------------------------------------------------------
*/

  function rdeco_authorName_field() {
      add_meta_box( 'meta-box-id-authorName', 'Author Name (general page only)', 'rdeco_field_authorName', 'page', 'normal', 'high' );
  }

  add_action( 'add_meta_boxes', 'rdeco_authorName_field' );

      function rdeco_field_authorName( $post ) {
          $values = get_post_custom( $post->ID );
          $text = isset( $values['meta_box_authorName_field'] ) ? esc_attr( $values['meta_box_authorName_field'][0] ) : '';
  ?>
  <p>
      <label for="meta_box_text">Author Name:  </label>
      <input type="text" name="meta_box_authorName_field" id="meta_box_authorName_field" value="<?php echo $text; ?>" />
  </p>

  <?php
  }


  add_action( 'save_post', 'rdeco_meta_box_save_authorName' );
  function rdeco_meta_box_save_authorName( $post_id ) {
      // Bail if we're doing an auto save
      if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

      // if our current user can't edit this post, bail
      if( !current_user_can( 'edit_post', $post_id ) ) return;

      // now we can actually save the data
      $allowed = array(
          'a' => array( // on allow a tags
              'href' => array() // and those anchors can only have href attribute
          )
      );

      // Make sure your data is set before trying to save it
      if( isset( $_POST['meta_box_authorName_field'] ) )
          update_post_meta( $post_id, 'meta_box_authorName_field', wp_kses( $_POST['meta_box_authorName_field'], $allowed ) );

  }
/**
* Ends support for meta box - general page - Author Name
* -------------------------------------------------------------------
*/



 /*---------------------------------------------------*
 * Starts support for excerpt character count *
 *---------------------------------------------------*/
 
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/*---------------------------------------------------*
* Adds support for pagination
*---------------------------------------------------*/

function pagination($pages = '', $range = 50){
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}


/*---------------------------------------------------*
* Adds multiple featured thumbnails for portfolio cpt
*---------------------------------------------------*/


if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Secondary Thumbnail',
            'id' => 'secondary-thumbnail',
            'post_type' => 'portfolio'
        )
         
    );

}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Third Thumbnail',
            'id' => 'third-thumbnail',
            'post_type' => 'portfolio'
        )
    );
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Fourth Thumbnail',
            'id' => 'fourth-thumbnail',
            'post_type' => 'portfolio'
        )
    );
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Fifth Thumbnail',
            'id' => 'fifth-thumbnail',
            'post_type' => 'portfolio'
        )
    );
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Sixth Thumbnail',
            'id' => 'sixth-thumbnail',
            'post_type' => 'portfolio'
        )
    );
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Seventh Thumbnail',
            'id' => 'seventh-thumbnail',
            'post_type' => 'portfolio'
        )
    );
}

?>