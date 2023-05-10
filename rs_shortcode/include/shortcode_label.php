<?php
/* Shortcode String Translations */
function zps_shortcode_label(){
$zps_shortcode_label  = array(
	// pricing table
	'pricing' => array(
		'menu' => __( 'Pricing','zp-shortcodes' ),
		'header_title' => __( 'Insert Pricing Shortcode','zp-shortcodes' ),
		'content' => array(
		)
	),
	// Blog
	'blog' => array(
		'menu' => __('Blog','zp-shortcodes' ),
		'header_title' => __( 'Insert Blog Shortcode','zp-shortcodes'),
		'content' => array(
			'columns' => array(
				'label' => __( 'Columns','zp-shortcodes' ),
				'tooltip' => __( 'Select blog section columns.','zp-shortcodes' ),
				'values' => array( 'Two', 'Three', 'Four' )
			),
			'items' => array(
				'label' => __( 'Items','zp-shortcodes' ),
				'tooltip' => __( 'How many items to display.','zp-shortcodes' )
			),
			'category' => array(
				'label' => __( 'Category','zp-shortcodes' ),
				'tooltip' => __( 'Select a post category to display. Leave empty to display all.','zp-shortcodes' )
			),
			'exclude_ids' => array(
				'label' => __( 'Exclude_ids','zp-shortcodes' ),
				'tooltip' => __( 'List the ids of the category to exclude in the query.','zp-shortcodes' )
			)
		)
	),
	// Team
	'team' => array(
		'menu' => __('Team','zp-shortcodes' ),
		'header_title' => __( 'Insert Team Shortcode','zp-shortcodes'),
		'content' => array(
			'columns' => array(
				'label' => __( 'Columns','zp-shortcodes' ),
				'tooltip' => __( 'Select team section columns.','zp-shortcodes' ),
				'values' => array( 'Two', 'Three', 'Four' )
			),
			'align' => array(
				'label' => __( 'Align','zp-shortcodes' ),
				'tooltip' => __( 'Select content alignment.','zp-shortcodes' ),
				'values' => array( 'Center', 'Left', 'Right' )
			),
		)
	),
	// Acccordion 
	'accordion' => array(
		'menu' => __('Accordion','zp-shortcodes' ),
		'header_title' => __( 'Insert Accordion Shortcode','zp-shortcodes'),
		'content' => array(
			'title1' => array(
				'label' => __( 'First Tab Title','zp-shortcodes' ),
				'tooltip' => __( 'Add first tab title.','zp-shortcodes' )
			),
			'active' => array(
				'label' => __( 'Open by default?','zp-shortcodes' ),
				'tooltip' => __( 'Select true/false to open/close the accordion by default.','zp-shortcodes' ),
				'values' => array( 'false', 'true','btn-inverse' )
			),
			'content1' => array(
				'label' => __( 'First Tab Content','zp-shortcodes' ),
				'tooltip' => __( 'Add first tab content.','zp-shortcodes' )
			)			
		)
	),
	// Buttons 
	'buttons' => array(
		'menu' => __('Button','zp-shortcodes' ),
		'header_title' => __( 'Insert Button Shortcode','zp-shortcodes'),
		'content' => array(
			'button_link' => array(
				'label' => __( 'Button Link','zp-shortcodes' ),
				'tooltip' => __( 'Add button link.','zp-shortcodes' )
			),
			'button_target' => array(
				'label' => __( 'Button Target','zp-shortcodes' ),
				'tooltip' => __( 'Add button target.','zp-shortcodes' )
			),
			'button_label' => array(
				'label' => __( 'Button Name','zp-shortcodes' ),
				'tooltip' => __( 'Add button name.','zp-shortcodes' )
			)
		)
	),
	// Testimonial 
	'testimonial' => array(
		'menu' => __('Testimonial','zp-shortcodes' ),
		'header_title' => __( 'Insert Testimonial Shortcode','zp-shortcodes'),
		'content' => array()
	),
	// Services 
	'services' => array(
		'menu' => __('Service','zp-shortcodes' ),
		'header_title' => __( 'Insert Service Shortcode','zp-shortcodes'),
		'content' => array(			
		)
	),
	// Columns 
	'columns' => array(
		'menu' => __('Columns','zp-shortcodes' ),
		'header_title' => __( 'Insert column Shortcode','zp-shortcodes'),
		'content' => array(	),
		'submenu' => array(
			'one_half' => __('One Half','zp-shortcodes' ),
			'one_third' => __('One Third','zp-shortcodes' ),
			'one_fourth' => __('One Fourth','zp-shortcodes' ),
		)
	),

	// Tabs 
	'tab' => array(
		'menu' => __('Tab','zp-shortcodes' ),
		'header_title' => __( 'Insert Tab Shortcode','zp-shortcodes'),
		'content' => array(
			'id1' => array(
				'label' => __( 'First Tab ID','zp-shortcodes' ),
				'tooltip' => __( 'Add first tab ID. This must be unique and one word only.','zp-shortcodes' )
			),
			'title1' => array(
				'label' => __( 'First Tab Title','zp-shortcodes' ),
				'tooltip' => __( 'Add first tab title.','zp-shortcodes' )
			),
			'content1' => array(
				'label' => __( 'First Tab Content','zp-shortcodes' ),
				'tooltip' => __( 'Add first tab content.','zp-shortcodes' )
			),
			'id2' => array(
				'label' => __( 'Second Tab ID','zp-shortcodes' ),
				'tooltip' => __( 'Add second tab ID. This must be unique and one word only.','zp-shortcodes' )
			),
			'title2' => array(
				'label' => __( 'Second Tab Title','zp-shortcodes' ),
				'tooltip' => __( 'Add second tab title.','zp-shortcodes' )
			),
			'content2' => array(
				'label' => __( 'Second Tab Content','zp-shortcodes' ),
				'tooltip' => __( 'Add second tab content.','zp-shortcodes' )
			),
			'id3' => array(
				'label' => __( 'Third Tab ID','zp-shortcodes' ),
				'tooltip' => __( 'Add third tab ID. This must be unique and one word only.','zp-shortcodes' )
			),
			'title3' => array(
				'label' => __( 'Third Tab Title','zp-shortcodes' ),
				'tooltip' => __( 'Add third tab title.','zp-shortcodes' )
			),
			'content3' => array(
				'label' => __( 'Third Tab Content','zp-shortcodes' ),
				'tooltip' => __( 'Add third tab content.','zp-shortcodes' )
			),
			
		)
	),
	// Client Carousel
	'client_carousel' => array(
		'menu' => __('Client Carousel','zp-shortcodes' ),
		'header_title' => __( 'Insert Client Carousel Shortcode','zp-shortcodes'),
		'content' => array(
			'name' => array(
				'label' => __( 'Add Carousel Name','zp-shortcodes' ),
				'tooltip' => __( 'This serves as carousel ID. It must be unique and avoid using spaces. Ex. "client_carousel".','zp-shortcodes' )
			),
			'items' => array(
				'label' => __( 'Number of items','zp-shortcodes' ),
				'tooltip' => __( 'Set the number of items".','zp-shortcodes' )
			),
			'autoplay' => array(
				'label' => __( 'Autoplay?','zp-shortcodes' ),
				'tooltip' => __( 'This serves as carousel ID. It must be unique and avoid using spaces. Ex. "client_carousel".','zp-shortcodes' ),
				'values' => array( 'false', 'true' )
			)		
		)
	),

);
return $zps_shortcode_label;
}