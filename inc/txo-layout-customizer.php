<?php

/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'txo_layout_panels_and_sections' ); 
function txo_layout_panels_and_sections( $wp_customize ) {
	
	// Woo List	 2	
	$wp_customize->add_panel('woolist7', array(
        'title'    => __('WooCommerce Products List 7', 'txo'),
        'description' => '',
        'priority' => 172,
    ));	
		$wp_customize->add_section('woolist7_options', array(
			'title'    => __('Listing Options', 'txo'),
			'description' => '',
			'panel' => 'woolist7',		
			'priority' => 200,
		));
		$wp_customize->add_section('woolist7_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'woolist7',		
			'priority' => 200,
		));	
		$wp_customize->add_section('woolist7_advanced', array(
			'title'    => __('Advanced Options', 'txo'),
			'description' => '',
			'panel' => 'woolist7',		
			'priority' => 201,
		));								
				
	
}


function txo_layout_custom_setting( $controls ) {
	
	/* Section title margin */	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'txo_title_margintop',
		'label'       => esc_attr__( 'Page Section Title Top Margin in PX', 'txo' ),
		'section'     => 'layout',
		'default'     => 25,
		'priority'    => 13,		
		'choices'     => array(
			'min'  => '0',
			'max'  => '120',
			'step' => '1',
		),
		'output' => array(
			array(
				'element'  => '.txo-section h2',
				'property' => 'margin-top',
				'units'	   => 'px',
			),
		),			
	);	
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'txo_title_marginbottom',
		'label'       => esc_attr__( 'Page Sction Title Bottom Margin in PX', 'txo' ),
		'section'     => 'layout',
		'default'     => 25,
		'priority'    => 13,		
		'choices'     => array(
			'min'  => '0',
			'max'  => '120',
			'step' => '1',
		),
		'output' => array(
			array(
				'element'  => '.txo-section h2',
				'property' => 'margin-bottom',
				'units'	   => 'px',
			),
		),				
	);
	
	/* Section sub title margin */	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'txo_subtitle_margintop',
		'label'       => esc_attr__( 'Page Section Subtitle Top Margin in PX', 'txo' ),
		'section'     => 'layout',
		'default'     => 12,
		'priority'    => 13,		
		'choices'     => array(
			'min'  => '0',
			'max'  => '120',
			'step' => '1',
		),
		'output' => array(
			array(
				'element'  => '.txo-section h3.txo-subtitle',
				'property' => 'margin-top',
				'units'	   => 'px',
			),
		),			
	);	
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'txo_subtitle_marginbottom',
		'label'       => esc_attr__( 'Page Section Subtitle Bottom Margin in PX', 'txo' ),
		'section'     => 'layout',
		'default'     => 32,
		'priority'    => 13,		
		'choices'     => array(
			'min'  => '0',
			'max'  => '120',
			'step' => '1',
		),
		'output' => array(
			array(
				'element'  => '.txo-section h3.txo-subtitle',
				'property' => 'margin-bottom',
				'units'	   => 'px',
			),
		),				
	);	

			
	/* Section title divider */	
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'txo_title_divider',
		'label'       => __( 'Turn ON Section Title Divider', 'txo' ),
		'section'     => 'layout',
		'default'     => 0,
		'priority'    => 13,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'txo_td_width',
		'label'       => esc_attr__( 'Title Divider Width in %', 'txo' ),
		'section'     => 'layout',
		'default'     => 12,
		'priority'    => 13,		
		'choices'     => array(
			'min'  => '1',
			'max'  => '100',
			'step' => '1',
		),
		'active_callback' => 'txo_title_divider',		
	);
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'txo_td_height',
		'label'       => esc_attr__( 'Title Divider Height in PX', 'txo' ),
		'section'     => 'layout',
		'default'     => 3,
		'priority'    => 13,		
		'choices'     => array(
			'min'  => '1',
			'max'  => '12',
			'step' => '1',
		),
		'active_callback' => 'txo_title_divider',		
	);		
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'txo_td_color',
        'label'    => __( 'Title Divider Color', 'txo' ),
        'section'  => 'layout',
		'default'     => get_theme_mod('primary_color', '#e57e26'),
		'priority'    => 13,
		//'alpha'       => true,
		'active_callback' => 'txo_title_divider',
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'txo_td_margintop',
		'label'       => esc_attr__( 'Title Divider Margin Top in PX', 'txo' ),
		'section'     => 'layout',
		'default'     => 20,
		'priority'    => 13,		
		'choices'     => array(
			'min'  => '0',
			'max'  => '120',
			'step' => '1',
		),
		'active_callback' => 'txo_title_divider',
		'output' => array(
			array(
				'element'  => '.txo-title-bar .txo-section h3.txo-subtitle:after',
				'property' => 'margin-top',
				'units'	   => 'px',
			),
		),			
	);	
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'txo_td_marginbottom',
		'label'       => esc_attr__( 'Title Divider Margin Bottom in PX', 'txo' ),
		'section'     => 'layout',
		'default'     => 40,
		'priority'    => 13,		
		'choices'     => array(
			'min'  => '0',
			'max'  => '120',
			'step' => '1',
		),
		'active_callback' => 'txo_title_divider',
		'output' => array(
			array(
				'element'  => '.txo-title-bar .txo-section h3.txo-subtitle:after',
				'property' => 'margin-bottom',
				'units'	   => 'px',
			),
		),				
	);			
	
    return $controls;
}
add_filter( 'kirki/controls', 'txo_layout_custom_setting' );

/**
 * About title divider condition
 */
function txo_title_divider() {
	//'setting' => 'itrans_overlay', 'operator' => '==', 'value' => 'nxs-gradient'
	if ( get_theme_mod('txo_title_divider') == 1 ) {
		return true;
	} else {
		return false;
	}
}

