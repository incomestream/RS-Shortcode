<?php
/**-------------------------------------------------------------------
 * Theme Shortcodes
 --------------------------------------------------------------------*/
/**
 *	Column Shortcodes
 */
if ( !function_exists( 'zps_column_wrapper' ) ){
	function zps_column_wrapper( $atts, $content = null ){
		extract( shortcode_atts( array(
		), $atts, 'column_wrapper' ));
		
		return '<div class="column_wrapper">'.do_shortcode($content).'</div>';
	}
	add_shortcode( 'column_wrapper', 'zps_column_wrapper' );
}
if (!function_exists('zps_one_third')) {
	function zps_one_third( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'align' => ''
		), $atts, 'one_third' ));
		
		if( $align == 'center' ){
			$align = 'text-center';
		}elseif ( $align == 'right' ){
			$align = 'text-right';	
		}else{
			$align = 'text-left';	
		}
	   return '<div class="zps_column zps_one_third '.$align.'">'.do_shortcode($content).'</div>';
	}
	add_shortcode('one_third', 'zps_one_third');
}
if ( !function_exists( 'zps_one_half' ) ){
	function zps_one_half( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts, 'one_half'));
		if( $align == 'center' ){
			$align = 'text-center';
		}elseif ( $align == 'right' ){
			$align = 'text-right';	
		}else{
			$align = 'text-left';	
		}
		return '<div class="zps_column zps_one_half '.$align.'">'.do_shortcode($content).'</div>';
	}
	add_shortcode( 'one_half', 'zps_one_half' );
}
if ( !function_exists( 'zps_one_fourth' ) ){
	function zps_one_fourth( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => '',
		), $atts, 'one_fourth' ));
		
		if( $align == 'center' ){
			$align = 'text-center';
		}elseif ( $align == 'right' ){
			$align = 'text-right';	
		}else{
			$align = 'text-left';	
		}
		return '<div class="zps_column zps_one_fourth '.$align.'">'.do_shortcode($content).'</div>'; 
	}
	add_shortcode( 'one_fourth', 'zps_one_fourth' );
}
/**
 *	Services
 */
if ( !function_exists( 'zps_services_wrap' )){
	function zps_services_wrap( $atts, $content = null ){
		extract( shortcode_atts( array(
			'class' => ''
		), $atts, 'services_wrap' ));
		return '<div class="zps_services_wrapper '.$class.'">'.do_shortcode( $content ).'</div>';
	}
	add_shortcode( 'services_wrap', 'zps_services_wrap' );
	
}
if ( !function_exists( 'zps_services' )){
	function zps_services( $atts, $content = null ){
		extract( shortcode_atts( array(
			'columns' => '',
			'align' => '',
			'image' => '',
			'title' => ''
		), $atts, 'services' ));
		if( $align != '' ){
			$align = 'zps_'.$align;
		}
		if( $image != '' ){
			$image = '<img src="'.$image.'" />';
		}
		if( $title != '' ){
			$title = '<h4>'.$title.'</h4>';
		}
		if( $columns == 2 ){
			$columns = 'zps_column zps_one_half';
		}elseif( $columns == 3 ){
			$columns = 'zps_column zps_one_third';
		}else{
			$columns = 'zps_column zps_one_fourth';
		}
		return '<div class="zps_services '.$columns.' '.$align.'">'.$image.$title.do_shortcode( $content ).'</div>';
	}
	add_shortcode( 'services', 'zps_services' );
	
}
/**
 *	Testimonial
 */
if ( !function_exists( 'zps_testimonial_wrapper' )){
	function zps_testimonial_wrapper( $atts, $content = null ){
		extract( shortcode_atts( array(
			'name'	=> '',
		), $atts, 'testimonial_wrap' ));

		wp_enqueue_style( 'owl_carousel' );
		wp_enqueue_style( 'owl_carousel_transition' );
		wp_enqueue_script( 'owl_carousel' );
		$output = '';
		$items = '1';
		$autoplay = 'true';
		$name = ( $name != '' ) ? $name : 'testimonial_carousel_item'; 
		$output .= '<script>
		jQuery(document).ready(function() {
		  var owl = jQuery("#'.$name.'");
		  owl.owlCarousel({
				items : '.$items.',
				loop: true,
				autoplay: true,
				autoplaySpeed: 2000,
				navSpeed: 2000,
				dotsSpeed: 2000
		 });
		  });
		</script>';
		return '<div class="testimonial_carousel">'.$output.'<div class="container"><div id="'.$name.'" class="testimonial_carousel_wrap owl-carousel owl-theme">'.do_shortcode( $content ).'</div></div></div>';		
	}
	add_shortcode( 'testimonial_wrap','zps_testimonial_wrapper' );
}
if ( !function_exists( 'zps_testimonial_item' )){
	function zps_testimonial_item( $atts, $content = null ){
		extract( shortcode_atts( array(
			'author' => '',
			'title' => '',
			'position' => ''
		), $atts, 'testimonial_item' ));

		$title = ( $title != '' ) ? '<h4>'.$title.'</h4>': '';
		$position = ( $position != '' ) ? '<span class="testimonial_position">'.$position.'</span>': '';

		return '<div class="testimonial_item"><div class="testimonial_quote"><span class="dashicons dashicons-editor-quote"></span></div><div class="testimonial_content">'.$title.'<p>'.do_shortcode( $content ).'</p></div><h4>'.$author.'</h4>'.$position.'</div>';		
	}
	add_shortcode( 'testimonial_item','zps_testimonial_item' );
}
/**
 *	Button Shortcode
 */
if (!function_exists( 'zps_button' )){
	function zps_button( $atts, $content = null ){
		extract( shortcode_atts( array(
			'link' => '',
			'class' => '',
			'target' => ''
		),$atts, 'button' ));
		
		return '<a class="zps_btn '.$class.' " href="'.esc_url( $link ).'" target="'.$target.'">'.$content.'</a>';		
	}
	
	add_shortcode( 'button', 'zps_button');
}
/**
 *	Accordion
 */
if ( !function_exists( 'zps_accordion_wrap' ) ){
	function zps_accordion_wrap( $atts, $content = null ){
		extract( shortcode_atts( array(
		),$atts, 'accordion_wrap' ));
		return ' <div class="accordion_wrap">'.do_shortcode( $content ).'</div>';
	}
	add_shortcode( 'accordion_wrap', 'zps_accordion_wrap' );
}
if ( !function_exists( 'zps_accordion' )){
	function zps_accordion( $atts, $content = null ){
		extract( shortcode_atts( array(
			'title' => '',
			'active' => ''
		), $atts, 'accordion_item' ));
		if( $active == 'true' ){
			$active = 'active';
		}
		return '<div class="accordion_item '.$active.'"><div class="accordion_header"><h4 class="accordion_title">'.$title.'<span class="dashicons dashicons-plus"></span></h4></div><div class="accordion_content"><div class="accordion_body">'.do_shortcode($content).'</div></div></div>';
	}
	
	add_shortcode( 'accordion_item', 'zps_accordion' );
}
/**
 *	Toggle
 */
if ( !function_exists( 'zps_toggle_wrap' ) ){
	function zps_toggle_wrap( $atts, $content = null ){
		extract( shortcode_atts( array(
		),$atts, 'toggle_wrap' ));
		return ' <div class="toggle_wrap">'.do_shortcode( $content ).'</div>';
	}
	add_shortcode( 'toggle_wrap', 'zps_toggle_wrap' );
}
if ( !function_exists( 'zps_toggle' )){
	function zps_toggle( $atts, $content = null ){
		extract( shortcode_atts( array(
			'title' => '',
			'active' => ''
		), $atts, 'toggle_item' ));
		if( $active == 'true' ){
			$active = 'active';
		}
		return '<div class="toggle_item '.$active.'"><div class="toggle_header"><h4 class="toggle_title">'.$title.'<span class="dashicons dashicons-plus"></span></h4></div><div class="toggle_content"><div class="toggle_body">'.do_shortcode($content).'</div></div></div>';
	}
	
	add_shortcode( 'toggle_item', 'zps_toggle' );
}
/**
 * Tabs
 */
if( !function_exists( 'zps_tabs' )){
	function zps_tabs( $atts, $content = null ){
		extract( shortcode_atts( array(
			'ids' => '',
			'nav' => ''
		), $atts, 'tab' ) );
		
		$ids_array = explode( ',',str_replace( " ", "", $ids ) );
		$nav_array = explode( ',',$nav );
		$output = '';
		
		$output .= '<div class="tab_container">';
		$output .= '<ul class="tab_nav">';
		for( $i=0; $i < count( $nav_array ); $i++ ){
			if( $i == 0 ){
				$output .= '<li class="active"><a href="#'.$ids_array[$i].'">'.$nav_array[$i].'</a></li>';
			}else{
				$output .= '<li><a href="#'.$ids_array[$i].'">'.$nav_array[$i].'</a></li>';
			}				
		}
		$output .= '</ul>';
		
		$output .= '<div class="tab_content"><p>'.do_shortcode( $content ).'</p></div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode( 'tab', 'zps_tabs' );
}
if( !function_exists( 'zps_tabpane' )){
	function zps_tabpane( $atts, $content = null ){
		extract( shortcode_atts( array(
			'id' => ''
		), $atts, 'tabpane' ) );
		
		return '<div class="tab_pane" id="'.$id.'">'.do_shortcode( $content ).'</div>';
	}
	add_shortcode( 'tabpane', 'zps_tabpane' );
}
/**
 *	hr
 */
if (!function_exists( 'zps_hr' )){
	function zps_hr( $atts, $content = null ){
		extract( shortcode_atts( array(
			'class' => ''
		),$atts, 'hr' ));		
		return '<hr class="'.$class.'" >';		
	}	
	add_shortcode( 'hr', 'zps_hr');
}
/**
 *	Drop Cap
 */
if (!function_exists( 'zps_drop_cap' )){
	function zps_drop_cap( $atts, $content = null ){
		extract( shortcode_atts( array(
		),$atts, 'dropcap' ));		
		return '<span class="dropcap" >'.$content.'</span>';
	}	
	add_shortcode( 'dropcap', 'zps_drop_cap');
}
/**
 *	Blog Section
 */
if ( !function_exists( 'zps_blog_section' ) ){
	function zps_blog_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'category' => '',
			'exclude_ids' => '',
			'columns' => '',
			'items' => ''
		), $atts, 'zpblog' ));
		return '<div class="zpblog">'.zps_blog( $category, $exclude_ids, $columns , $items ).'</div>';
	}
	add_shortcode( 'zpblog', 'zps_blog_section' );
}
function zps_blog( $category, $exclude_ids, $columns , $items ){
		global $post;
		$output='';
		
		// get blog settings
		$include = $category;
		$exclude = explode( ',', str_replace( ' ', '', $exclude_ids ) );
		if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
		elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
		else { $paged = 1; }
		// inherit Genesis arguments to render posts
		$query_args = 
			array(
				'post_type'		   => 'post',
				'cat'              => $include,
				'category__not_in' => $exclude,
				'showposts'        => $items,
				'paged'            => $paged,
			);
		
		$render_post  = new WP_Query( $query_args );
			
		//check the no of columns
		if( $columns == 2 ){
			$columns = 'zps_column zps_one_half';
		}elseif( $columns == 3 ){
			$columns = 'zps_column zps_one_third';
		}else{
			$columns = 'zps_column zps_one_fourth';
		}
		$output .=   '<div class="zpblog_shortcode">';
		$flag = 0;
		
		while($render_post->have_posts()) : $render_post->the_post();
		
			$image_url = wp_get_attachment_url(  get_post_thumbnail_id(  $post->ID  )  );
			$image = get_the_post_thumbnail( $post->ID  , 'large', array('class'=> 'img-responsive') );
						
			$output .= '<div class="'.$columns.'"><div class="thumbnail">';
			$output .= '<a href="'.esc_url(get_permalink()).'">'.$image.'</a>';
			$output .= '<div class="caption"><h4><a href="'.esc_url(get_permalink()).'">'.get_the_title().'</a></h4><span class="blog_meta">'. get_the_date( 'F j, Y' ).'</span>'.get_the_content_limit( 100, '' ).'<a class="zps_readmore" href="'.esc_url(get_permalink()).'">'.__( 'Read More','start' ).'</a></div>';
			$output .= '</div></div>';
		
		endwhile;
		wp_reset_query();
		
		$output .= '</div>';
		
		return $output;
}
/**
 * Client carousel
 */
if( !function_exists( 'zp_client_carousel' ) ){
 function zp_client_carousel( $atts, $content = null ){
	 extract( shortcode_atts( array(
	 	'name' => '',
	 	'autoplay' => ''
	 ), $atts, 'client_carousel' ));
	wp_enqueue_style( 'owl_carousel' );
	wp_enqueue_style( 'owl_carousel_transition' );
	wp_enqueue_script( 'owl_carousel' );
	$output = '';

	$autoplay = ( $autoplay != '' ) ? $autoplay : 'true';
	$name = ( $name != '' ) ? $name : 'client_carousel'; 
	$output .= '<script>
	jQuery(document).ready(function() {
	  var owl = jQuery("#'.$name.'");
	  owl.owlCarousel({
			  items : 4, 
			  loop: '.$autoplay.',
			  nav: false,
			  margin: 0,
			  responsive:{
			        0:{
			            items:1
			        },
			        480:{
			            items:1
			        },
			        600:{
			            items:3
			        },
			        767:{
			            items:3
			        },
			        1023:{
			            items:4
			        }
			    }
	 });
	 
	  });
	  
	</script>';
	return '<div class="client_carousel">'.$output.'<div class="container"><div id="'.$name.'" class="owl-carousel owl-theme">'.do_shortcode( $content ).'</div></div></div>';
 }
 
 add_shortcode( 'client_carousel', 'zp_client_carousel' );
}
 
/**
 * Client carousel item
 */
if ( !function_exists( 'zps_client_item' ) ){
	function zps_client_item( $atts, $content = null ){
		extract( shortcode_atts( array(
			'image' => '',
			'link' => '',
			'target' => ''
		), $atts, 'client_item' ));
		if( $link ){
			$client_image = '<a href="'.esc_url( $link ).'" target="'.$target.'" ><img src="'.$image.'" class="zps_carousel_image" /></a>';	
		}else{
			$client_image = '<img src="'.$image.'" class="zps_carousel_image" />';
		}
		
		return ' <div class="item">'.$client_image.'</div>';
	}
	add_shortcode( 'client_item', 'zps_client_item' );
}
/**
 * Pricing Wrap
 */
if ( !function_exists( 'zps_pricing_wrap' ) ){
	function zps_pricing_wrap( $atts, $content = null ){
		extract( shortcode_atts( array(
			'title' => '',
			'price' => '',
			'desc' => '',
			'label' => '',
			'target' => '',
			'link' => '',
			'column' => '',
			'best' => ''
		), $atts, 'pricing_wrap' ));
		
		return ' <div class="pricing_wrap">'.do_shortcode( $content ).'</div>';
	}
	add_shortcode( 'pricing_wrap', 'zps_pricing_wrap' );
}
/**
 * Pricing
 */
if ( !function_exists( 'zps_pricing' ) ){
	function zps_pricing( $atts, $content = null ){
		extract( shortcode_atts( array(
			'title' => '',
			'price' => '',
			'desc' => '',
			'label' => '',
			'target' => '',
			'link' => '',
			'column' => '',
			'best' => ''
		), $atts, 'pricing' ));
		if( $column == 2 ){
			$column = 'zps_column zps_one_half';
		}elseif( $column == 3 ){
			$column = 'zps_column zps_one_third';
		}else{
			$column = 'zps_column zps_one_fourth';
		}
		$best = ( $best == 'true' ) ? 'pricing_best' : '';
		$target = ( $target == '' ) ? $target : '_self'; 
   		$pricing_head = '<div class="pricing_head"><span class="pricing_title">'.$title.'</span><span class="pricing_price">'.$price.'</span><span class="pricing_desc">'.$desc.'</span></div>';
   		$pricing_content = '<div class="pricing_content">'.do_shortcode( $content ).'</div>';
   		$pricing_footer = '<div class="pricing_footer"><a class="pricing_button" href="'.esc_url( $link ).'">'.$label.'</a></div>';
		
		return ' <div class="pricing '.$column.' '.$best.'">'.$pricing_head.$pricing_content.$pricing_footer.'</div>';
	}
	add_shortcode( 'pricing', 'zps_pricing' );
}
/**
 *	Team Section
 */
if ( !function_exists( 'zp_team_wrap' )){
	function zp_team_wrap( $atts, $content = null ){
		extract( shortcode_atts( array(
		), $atts, 'team_wrap' ));
		return'<div class="zps_team_wrap">'.do_shortcode( $content ).'</div>';
	}
	add_shortcode ('team_wrap', 'zp_team_wrap');
}
if ( !function_exists( 'zp_team_item' )){
	function zp_team_item( $atts, $content = null ){
		extract( shortcode_atts( array(
			'column' => '',
			'dribbble' => '',
			'flickr' => '',
			'github' => '',
			'pinterest' => '',
			'twitter' => '',
			'facebook' => '',
			'google' => '',
			'skype' => '',
			'tumblr' => '',
			'vimeo' => '',
			'youtube' => '',
			'linkedin' => '',
			'instagram' => '',
			'image' => '',
			'link' => '',
			'target' => '',
			'title' => '',
			'desc' => ''
		), $atts, 'team' ));
		$output = $social = '';
		wp_enqueue_style( 'fontawesome' );
		// check the number of columns
		if( $column == 2 ){
			$column = 'zps_column zps_one_half';
		}elseif( $column == 3 ){
			$column = 'zps_column zps_one_third';
		}else{
			$column = 'zps_column zps_one_fourth';
		}
		
		// team social links
		$social = '';
		if( $dribbble != '' ){
			$social .= '<li><a href="'.esc_url($dribbble).'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';	
		}
		if( $flickr != '' ){
			$social .= '<li><a href="'.esc_url($flickr).'" target="_blank"><i class="fa fa-flickr"></i></a></li>';	
		}
		if( $github != '' ){
			$social .= '<li><a href="'.esc_url($github).'" target="_blank"><i class="fa fa-github"></i></a></li>';	
		}
		if( $pinterest != '' ){
			$social .= '<li><a href="'.esc_url($pinterest).'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';	
		}
		if( $twitter != '' ){
			$social .= '<li><a href="'.esc_url($twitter).'" target="_blank"><i class="fa fa-twitter"></i></a></li>';	
		}
		if( $facebook != '' ){
			$social .= '<li><a href="'.esc_url($facebook).'" target="_blank"><i class="fa fa-facebook"></i></a></li>';	
		}
		if( $google != '' ){
			$social .= '<li><a href="'.esc_url($google).'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';	
		}
		if( $skype != '' ){
			$social .= '<li><a href="'.esc_url($skype).'" target="_blank"><i class="fa fa-skype"></i></a></li>';	
		}
		if( $tumblr != '' ){
			$social .= '<li><a href="'.esc_url($tumblr).'" target="_blank"><i class="fa fa-tumblr"></i></a></li>';	
		}
		if( $vimeo != '' ){
			$social .= '<li><a href="'.esc_url($vimeo).'" target="_blank"><i class="fa fa-vimeo"></i></a></li>';	
		}
		if( $youtube != '' ){
			$social .= '<li><a href="'.esc_url($youtube).'" target="_blank"><i class="fa fa-youtube"></i></a></li>';	
		}
		if( $linkedin != '' ){
			$social .= '<li><a href="'.esc_url($linkedin).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';	
		}
		if( $instagram != '' ){
			$social .= '<li><a href="'.esc_url($instagram).'" target="_blank"><i class="fa fa-instagram"></i></a></li>';	
		}	
	
		// Get link value
		if( $link != '' ){
			$image_link = '<a href="'.esc_url( $link ).'" target="'.$target.'"><img src="'.$image.'" /></a>';
		}else{
			$image_link = '<img src="'.$image.'" />';
		}
		$output .= '<div class="zps_team '.$column.'"><div class="thumbnail" ><div class="feature-icon">'.$image_link.'</div><div class="caption"><h4>'.$title.'<br><small>'.$desc.'</small></h4><p>'.do_shortcode( $content ).'</p><ul class="zps_team_social">'.$social.'</ul></div></div></div>';	
		
		return $output;
	}
	add_shortcode ('team', 'zp_team_item');
}