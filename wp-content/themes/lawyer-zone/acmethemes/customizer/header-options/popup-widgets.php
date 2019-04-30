<?php
/*Title*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-popup-widget-title]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-popup-widget-title'],
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-popup-widget-title]', array(
	'label'		        => esc_html__( 'Main Title', 'lawyer-zone' ),
	'section'           => 'lawyer-zone-menu-options',
	'settings'          => 'lawyer_zone_theme_options[lawyer-zone-popup-widget-title]',
	'type'	  	        => 'text',
	'priority'	  	    => 1,
) );
$lawyer_zone_popup_widget_area = $wp_customize->get_section( 'sidebar-widgets-popup-widget-area' );
if ( ! empty( $lawyer_zone_popup_widget_area ) ) {
	$lawyer_zone_popup_widget_area->panel = 'lawyer-zone-header-panel';
	$lawyer_zone_popup_widget_area->title = esc_html__( 'Popup Widgets', 'lawyer-zone' );
	$lawyer_zone_popup_widget_area->priority = 999;

	$lawyer_zone_popup_widget_title = $wp_customize->get_control( 'lawyer_zone_theme_options[lawyer-zone-popup-widget-title]' );
	if ( ! empty( $lawyer_zone_popup_widget_title ) ) {
		$lawyer_zone_popup_widget_title->section  = 'sidebar-widgets-popup-widget-area';
		$lawyer_zone_popup_widget_title->priority = -1;
	}
}