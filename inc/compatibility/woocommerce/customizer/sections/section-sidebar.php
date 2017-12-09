<?php
/**
 * Content Spacing Options for our theme.
 *
 * @package     Astra
 * @author      Brainstorm Force
 * @copyright   Copyright (c) 2015, Brainstorm Force
 * @link        http://www.brainstormforce.com
 * @since       Astra 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	/**
	 * Option: Divider
	 */
	$wp_customize->add_control( new Astra_Control_Divider( $wp_customize, ASTRA_THEME_SETTINGS . '[single-product-sidebar-layout-divider]', array(
		'section'     => 'section-sidebars',
		'type'        => 'ast-divider',
		'priority'	  => 5,
		'settings'    => array(),
	) ) );

	/**
	 * Option: Shop Page
	 */
	$wp_customize->add_setting( ASTRA_THEME_SETTINGS . '[archive-product-sidebar-layout]', array(
		'default' => astra_get_option( 'archive-product-sidebar-layout' ),
		'type'    => 'option',
	) );
	$wp_customize->add_control( ASTRA_THEME_SETTINGS . '[archive-product-sidebar-layout]', array(
		'type'     => 'select',
		'section'  => 'section-sidebars',
		'priority' => 5,
		'label'    => __( 'Shop Page', 'astra' ),
		'choices'  => array(
			'default'       => __( 'Default', 'astra' ),
			'no-sidebar'    => __( 'No Sidebar', 'astra' ),
			'left-sidebar'  => __( 'Left Sidebar', 'astra' ),
			'right-sidebar' => __( 'Right Sidebar', 'astra' ),
		),
	) );
	
	/**
	 * Option: Single Product
	 */
	$wp_customize->add_setting( ASTRA_THEME_SETTINGS . '[single-product-sidebar-layout]', array(
		'default' => astra_get_option( 'single-product-sidebar-layout' ),
		'type'    => 'option',
	) );
	$wp_customize->add_control( ASTRA_THEME_SETTINGS . '[single-product-sidebar-layout]', array(
		'type'     => 'select',
		'section'  => 'section-sidebars',
		'priority' => 5,
		'label'    => __( 'Single Product', 'astra' ),
		'choices'  => array(
			'default'       => __( 'Default', 'astra' ),
			'no-sidebar'    => __( 'No Sidebar', 'astra' ),
			'left-sidebar'  => __( 'Left Sidebar', 'astra' ),
			'right-sidebar' => __( 'Right Sidebar', 'astra' ),
		),
	) );

