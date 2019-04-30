<?php
/**
 * Menu and Logo Display Options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_header_image_display
 *
 */
if ( !function_exists('lawyer_zone_header_image_display') ) :
	function lawyer_zone_header_image_display() {
		$lawyer_zone_header_image_display =  array(
			'hide'              => esc_html__( 'Hide', 'lawyer-zone' ),
			'bg-image'          => esc_html__( 'Background Image', 'lawyer-zone' ),
			'normal-image'      => esc_html__( 'Normal Image', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_header_image_display', $lawyer_zone_header_image_display );
	}
endif;

/**
 * Menu Right Button Link Options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_menu_right_button_link_options
 *
 */
if ( !function_exists('lawyer_zone_menu_right_button_link_options') ) :
	function lawyer_zone_menu_right_button_link_options() {
		$lawyer_zone_menu_right_button_link_options =  array(
			'disable'       => esc_html__( 'Disable', 'lawyer-zone' ),
			'booking'       => esc_html__( 'Popup Widgets ( Booking Form )', 'lawyer-zone' ),
			'link'          => esc_html__( 'One Link', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_menu_right_button_link_options', $lawyer_zone_menu_right_button_link_options );
	}
endif;

/**
 * Header top display options of elements
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_header_top_display_selection
 *
 */
if ( !function_exists('lawyer_zone_header_top_display_selection') ) :
	function lawyer_zone_header_top_display_selection() {
		$lawyer_zone_header_top_display_selection =  array(
			'hide'          => esc_html__( 'Hide', 'lawyer-zone' ),
			'left'          => esc_html__( 'on Top Left', 'lawyer-zone' ),
			'right'         => esc_html__( 'on Top Right', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_header_top_display_selection', $lawyer_zone_header_top_display_selection );
	}
endif;

/**
 * Feature slider text align
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_slider_text_align
 *
 */
if ( !function_exists('lawyer_zone_slider_text_align') ) :
	function lawyer_zone_slider_text_align() {
		$lawyer_zone_slider_text_align =  array(
			'alternate'     => esc_html__( 'Alternate', 'lawyer-zone' ),
			'text-left'     => esc_html__( 'Left', 'lawyer-zone' ),
			'text-right'    => esc_html__( 'Right', 'lawyer-zone' ),
			'text-center'   => esc_html__( 'Center', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_slider_text_align', $lawyer_zone_slider_text_align );
	}
endif;

/**
 * Featured Slider Image Options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_fs_image_display_options
 *
 */
if ( !function_exists('lawyer_zone_fs_image_display_options') ) :
	function lawyer_zone_fs_image_display_options() {
		$lawyer_zone_fs_image_display_options =  array(
			'full-screen-bg' => esc_html__( 'Full Screen Background', 'lawyer-zone' ),
			'responsive-img' => esc_html__( 'Responsive Image', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_fs_image_display_options', $lawyer_zone_fs_image_display_options );
	}
endif;

/**
 * Feature Info number
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_feature_info_number
 *
 */
if ( !function_exists('lawyer_zone_feature_info_number') ) :
	function lawyer_zone_feature_info_number() {
		$lawyer_zone_feature_info_number =  array(
			1               => esc_html__( '1', 'lawyer-zone' ),
			2               => esc_html__( '2', 'lawyer-zone' ),
			3               => esc_html__( '3', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_feature_info_number', $lawyer_zone_feature_info_number );
	}
endif;

/**
 * Footer copyright beside options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_footer_copyright_beside_option
 *
 */
if ( !function_exists('lawyer_zone_footer_copyright_beside_option') ) :
	function lawyer_zone_footer_copyright_beside_option() {
		$lawyer_zone_footer_copyright_beside_option =  array(
			'hide'          => esc_html__( 'Hide', 'lawyer-zone' ),
			'social'        => esc_html__( 'Social Links', 'lawyer-zone' ),
			'footer-menu'   => esc_html__( 'Footer Menu', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_footer_copyright_beside_option', $lawyer_zone_footer_copyright_beside_option );
	}
endif;

/**
 * Sidebar layout options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_sidebar_layout
 *
 */
if ( !function_exists('lawyer_zone_sidebar_layout') ) :
    function lawyer_zone_sidebar_layout() {
        $lawyer_zone_sidebar_layout =  array(
	        'right-sidebar' => esc_html__( 'Right Sidebar', 'lawyer-zone' ),
	        'left-sidebar'  => esc_html__( 'Left Sidebar' , 'lawyer-zone' ),
	        'both-sidebar'  => esc_html__( 'Both Sidebar' , 'lawyer-zone' ),
	        'middle-col'    => esc_html__( 'Middle Column' , 'lawyer-zone' ),
	        'no-sidebar'    => esc_html__( 'No Sidebar', 'lawyer-zone' )
        );
        return apply_filters( 'lawyer_zone_sidebar_layout', $lawyer_zone_sidebar_layout );
    }
endif;

/**
 * Blog content from
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_blog_archive_content_from
 *
 */
if ( !function_exists('lawyer_zone_blog_archive_content_from') ) :
	function lawyer_zone_blog_archive_content_from() {
		$lawyer_zone_blog_archive_content_from =  array(
			'excerpt'    => esc_html__( 'Excerpt', 'lawyer-zone' ),
			'content'    => esc_html__( 'Content', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_blog_archive_content_from', $lawyer_zone_blog_archive_content_from );
	}
endif;

/**
 * Image Size
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_get_image_sizes_options
 *
 */
if ( !function_exists('lawyer_zone_get_image_sizes_options') ) :
	function lawyer_zone_get_image_sizes_options( $add_disable = false ) {
		global $_wp_additional_image_sizes;
		$choices = array();
		if ( true == $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'lawyer-zone' );
		}
		foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
			$choices[ $_size ] = $_size . ' ('. get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
		}
		$choices['full'] = esc_html__( 'full (original)', 'lawyer-zone' );
		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {

			foreach ($_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key . ' ('. $size['width'] . 'x' . $size['height'] . ')';
			}
		}
		return apply_filters( 'lawyer_zone_get_image_sizes_options', $choices );
	}
endif;

/**
 * Pagination Options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array lawyer_zone_pagination_options
 *
 */
if ( !function_exists('lawyer_zone_pagination_options') ) :
	function lawyer_zone_pagination_options() {
		$lawyer_zone_pagination_options =  array(
			'default'  => esc_html__( 'Default', 'lawyer-zone' ),
			'numeric'  => esc_html__( 'Numeric', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_pagination_options', $lawyer_zone_pagination_options );
	}
endif;

/**
 * Default Theme layout options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_theme_layout
 *
 */
if ( !function_exists('lawyer_zone_get_default_theme_options') ) :
    function lawyer_zone_get_default_theme_options() {

        $default_theme_options = array(

	        /*logo and site title*/
	        'lawyer-zone-display-site-logo'      => '',
	        'lawyer-zone-display-site-title'     => 1,
	        'lawyer-zone-display-site-tagline'   => 1,

	        /*header height*/
	        'lawyer-zone-header-height'          => 300,
	        'lawyer-zone-header-image-display'   => 'normal-image',

            /*header top*/
            'lawyer-zone-enable-header-top'       => '',
	        'lawyer-zone-header-top-menu-display-selection'      => 'right',
	        'lawyer-zone-header-top-info-display-selection'      => 'left',
	        'lawyer-zone-header-top-social-display-selection'    => 'right',

	        /*menu options*/
            'lawyer-zone-enable-transparent'             => '',
            'lawyer-zone-enable-sticky'                  => '',
	        'lawyer-zone-menu-right-button-options'      => 'disable',
	        'lawyer-zone-menu-right-button-title'        => esc_html__('Request a Quote','lawyer-zone'),
	        'lawyer-zone-menu-right-button-link'         => '',
            'lawyer-zone-enable-cart-icon'               => '',

	        /*feature section options*/
	        'lawyer-zone-enable-feature'                         => '',
	        'lawyer-zone-slides-data'                            => '',
            'lawyer-zone-feature-slider-enable-animation'        => 1,
            'lawyer-zone-feature-slider-display-title'           => 1,
            'lawyer-zone-feature-slider-display-excerpt'         => 1,
            'lawyer-zone-fs-image-display-options'               => 'full-screen-bg',
            'lawyer-zone-feature-slider-text-align'              => 'text-left',

	        /*basic info*/
	        'lawyer-zone-feature-info-number'    => 4,
	        'lawyer-zone-first-info-icon'        => 'fa-calendar',
	        'lawyer-zone-first-info-title'       => esc_html__('Send Us a Mail', 'lawyer-zone'),
	        'lawyer-zone-first-info-desc'        => esc_html__('domain@example.com ', 'lawyer-zone'),
	        'lawyer-zone-second-info-icon'       => 'fa-map-marker',
	        'lawyer-zone-second-info-title'      => esc_html__('Our Location', 'lawyer-zone'),
	        'lawyer-zone-second-info-desc'       => esc_html__('Elmonte California', 'lawyer-zone'),
	        'lawyer-zone-third-info-icon'        => 'fa-phone',
	        'lawyer-zone-third-info-title'       => esc_html__('Call Us', 'lawyer-zone'),
	        'lawyer-zone-third-info-desc'        => esc_html__('01-23456789-10', 'lawyer-zone'),
	        'lawyer-zone-forth-info-icon'        => 'fa-envelope-o',
	        'lawyer-zone-forth-info-title'       => esc_html__('Office Hours', 'lawyer-zone'),
	        'lawyer-zone-forth-info-desc'        => esc_html__('8 hours per day', 'lawyer-zone'),

            /*footer options*/
            'lawyer-zone-footer-copyright'                       => esc_html__( '&copy; All right reserved', 'lawyer-zone' ),
	        'lawyer-zone-footer-copyright-beside-option'         => 'footer-menu',
	        'lawyer-zone-footer-bg-img'                          => '',

	        /*layout/design options*/
	        'lawyer-zone-pagination-option'      => 'numeric',

	        'lawyer-zone-enable-animation'       => '',

	        'lawyer-zone-single-sidebar-layout'                  => 'right-sidebar',
            'lawyer-zone-front-page-sidebar-layout'              => 'right-sidebar',
            'lawyer-zone-archive-sidebar-layout'                 => 'right-sidebar',

            'lawyer-zone-blog-archive-img-size'                  => 'full',
            'lawyer-zone-blog-archive-content-from'              => 'excerpt',
            'lawyer-zone-blog-archive-excerpt-length'            => 42,
	        'lawyer-zone-blog-archive-more-text'                 => esc_html__( 'Read More', 'lawyer-zone' ),

	        'lawyer-zone-primary-color'          => '#44465d',
            'lawyer-zone-header-top-bg-color'    => '#44465d',
            'lawyer-zone-footer-bg-color'        => '#1f1f1f',
            'lawyer-zone-footer-bottom-bg-color' => '#2d2d2d',
            'lawyer-zone-link-color'             => '#c2b697',
            'lawyer-zone-link-hover-color'       => '#c2b697',

	        /*Front Page*/
	        'lawyer-zone-hide-front-page-content' => '',
	        'lawyer-zone-hide-front-page-header'  => '',

	        /*single post*/
	        'lawyer-zone-single-header-title'            => esc_html__( 'Blog', 'lawyer-zone' ),
	        'lawyer-zone-single-img-size'                => 'full',

	        /*theme options*/
            'lawyer-zone-popup-widget-title'     => esc_html__( 'Request a Quote', 'lawyer-zone' ),
	        'lawyer-zone-show-breadcrumb'        => 1,
            'lawyer-zone-search-placeholder'     => esc_html__( 'Search', 'lawyer-zone' ),
            'lawyer-zone-social-data'            => ''
        );
        return apply_filters( 'lawyer_zone_default_theme_options', $default_theme_options );
    }
endif;

/**
 * Get theme options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array lawyer_zone_theme_options
 *
 */
if ( !function_exists('lawyer_zone_get_theme_options') ) :
    function lawyer_zone_get_theme_options() {

        $lawyer_zone_default_theme_options = lawyer_zone_get_default_theme_options();
        $lawyer_zone_get_theme_options = get_theme_mod( 'lawyer_zone_theme_options');
        if( is_array( $lawyer_zone_get_theme_options )){
            return array_merge( $lawyer_zone_default_theme_options ,$lawyer_zone_get_theme_options );
        }
        else{
            return $lawyer_zone_default_theme_options;
        }
    }
endif;