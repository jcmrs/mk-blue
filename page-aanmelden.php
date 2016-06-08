<?php
/* Template name: Bedrijfsaanmelding */

// Load necessary UIkit components.
add_action( 'beans_uikit_enqueue_scripts', 'group_view_enqueue_uikit_assets' );

function group_view_enqueue_uikit_assets() {

	beans_uikit_enqueue_components( array( 'contrast', 'thumbnail', 'scrollspy', 'modal', 'smooth-scroll' ), 'core' );
	beans_uikit_enqueue_components( array( 'flext', 'sticky', 'offcanvas' ), 'add-ons' );

}

////////

// New Stellar Places area.

// beans_remove_action( 'beans_header' );

// beans_remove_action( 'blue_header_bar' );

// beans_remove_action( 'beans_site_branding' );

// beans_remove_action( 'beans_primary_menu' );

// beans_remove_action( 'beans_site_title_tag' );

// Move the post image above the post title.
beans_modify_action_hook( 'beans_post_image', 'beans_post_content_after_markup' );

////////

// Load document which is always needed at the bottom of template files.
beans_load_document();