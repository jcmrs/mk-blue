<?php

//////// Beans General starts here ////////

// Include Beans. Do not remove the line below.
require_once( get_template_directory() . '/lib/init.php' );

// Remove this action and callback function if you do not whish to use LESS to style your site or overwrite UIkit variables.
// If you are using LESS, make sure to enable development mode via the Admin->Appearance->Settings option. LESS will then be processed on the fly.

add_action( 'beans_uikit_enqueue_scripts', 'beans_child_enqueue_uikit_assets' );

function beans_child_enqueue_uikit_assets() {

	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/style.less', 'less' );

}

// UIKit Components.
add_action( 'beans_uikit_enqueue_scripts', 'mk_uikit_complete' );

function mk_uikit_complete() {

	beans_uikit_enqueue_components( true );
	beans_uikit_enqueue_components( true, 'add-ons' );
	
}

// Add Custom Javascript
add_action( 'beans_uikit_enqueue_scripts', 'blue_custom_js_view_enqueue_uikit_assets' );

function blue_custom_js_view_enqueue_uikit_assets() {

    beans_compiler_add_fragment( 'uikit', get_stylesheet_directory() . '/assets/custom.js', 'js' );

}

// Add sticky to Navbar
// beans_add_attribute( 'beans_header', 'data-uk-sticky', 'top:0' );

// Change default featured image size.
add_filter( 'beans_edit_post_image_args', 'mk_post_image_edit_args' );

function mk_post_image_edit_args( $args ) {

    return array_merge( $args, array(
        'resize' => array( 1200, 360, true ),
    ) );

}

add_filter( 'beans_edit_post_image_small_args', 'mk_post_image_small_args' );

function mk_post_image_small_args( $args ) {

    return array_merge( $args, array(
        'resize' => array( 800, 360, true ),
    ) );
    
}

// Alternative: let WP handle things.
// add_filter( 'beans_post_image_edit', '__return_false' );

//////// Beans Site-wide Functionality ends here ////////

//////// New Areas start here ////////



// Removed to shared.php
// Add Content Bar.

// Removed to shared.php
// Modify Post Title.
// beans_add_attribute( 'beans_post_title', 'class', 'uk-text-muted uk-text-right uk-h6' );

// Removed to shared.php
// Adding tel: link to beans_site_title_tag.

// Removed to shared.php
// Add Contact Bar.

// Removed to shared.php
// Add Back to Top Bar.


// Removed to shared.php
// New Random Quote (Widget) area.

// Removed to shared.php
// Display the Quote widget area in the front end.

// Removed to shared.php
// Replace default Footer Content.

//////// New Areas end here ////////

//////// Customisations start here ////////

// Removed to shared.php
// Modify Beans Widget Title.

// beans_add_attribute( "beans_post_image", "data-uk-parallax", "{ bg: '-100,100', opacity: '1,0.5' }" );
// beans_add_attribute( 'beans_post_image', 'class', 'uk-animation-fade uk-animation-hover uk-animation-3' );

// Modify Beans Main.
// Removed to shared.php

// Replace site title tag styling
// beans_replace_attribute( 'beans_site_title_tag', 'class', 'uk-text-muted', 'uk-text-left uk-text-break uk-text-small uk-text-contrast' );
// beans_modify_action_hook( 'beans_site_title_tag', 'beans_header_after_markup' );

// Modify Breadcrumb
// beans_modify_action_hook( 'beans_breadcrumb', 'beans_post_image_after_markup' );
// beans_add_attribute( 'beans_breadcrumb', 'class', 'uk-text-small  uk-text-right uk-text-center-medium uk-text-center-small uk-padding-remove' );
// beans_add_attribute( 'beans_breadcrumb_item', 'class', 'uk-text-small uk-text-right uk-text-center-medium uk-text-center-small' );
// beans_add_attribute( 'beans_breadcrumb_item_link', 'class', 'uk-text-small uk-text-right uk-text-center-medium uk-text-center-small' );

// Modify Post Title.
// beans_add_attribute( 'beans_post_title', 'class', 'uk-h6' );
// beans_add_attribute( 'beans_post_title', 'class', 'uk-text-muted uk-text-right uk-h6' );

//////// Customisations end here ////////

// Little helpers
require_once( get_stylesheet_directory() . '/assets/helpers/cleaner.php' );
require_once( get_stylesheet_directory() . '/assets/helpers/testing.php' );
require_once( get_stylesheet_directory() . '/assets/helpers/shared.php' );