<?php
/* Template name: Test Splash */

// Load necessary UIkit components.
add_action( 'beans_uikit_enqueue_scripts', 'group_view_enqueue_uikit_assets' );

function group_view_enqueue_uikit_assets() {

	beans_uikit_enqueue_components( array( 'contrast', 'thumbnail', 'scrollspy', 'modal', 'smooth-scroll' ), 'core' );
	beans_uikit_enqueue_components( array( 'flex', 'sticky', 'offcanvas' ), 'add-ons' );

}

////////

// beans_remove_action( 'beans_header' );

beans_remove_action( 'beans_site_branding' );

// beans_remove_action( 'beans_site_title' );

// beans_remove_action( 'beans_site_title_link' );

// beans_remove_action( 'beans_site_title_tag' );

beans_remove_action( 'beans_primary_menu' );

// beans_remove_action( 'beans_fixed_wrap[_header]' );

// Move menu above header and adjust classes.
// beans_modify_action_hook( 'beans_primary_menu', 'beans_header_before_markup' );
// beans_replace_attribute( 'beans_primary_menu', 'class', 'uk-float-right', 'uk-container uk-container-center' );

beans_add_attribute( 'beans_header', 'class', 'uk-viewport splash-bar' );

// beans_modify_action_hook( 'splash_bar', 'beans_fixed_wrap[_header]_append_markup' );

add_action( 'beans_header_append_markup', 'splash_bar' );

function splash_bar() {

	?>

    <div class="splash-bar uk-block-large uk-height-viewport uk-flex uk-flex-center uk-flex-middle">
        <div class="uk-container uk-container-center uk-text-center uk-responsive-width uk-responsive-height">
            <div class="uk-container uk-container-center tm-medium-container uk-text-center">
                <div class="uk-grid uk-grid-width-1-1 uk-margin-large">
                    <?php beans_site_branding(); ?>
                </div>
            </div>
            
            <div class="uk-container uk-container-center tm-medium-container uk-text-center">
                <div class="uk-grid uk-grid-width-1-1 uk-margin-large">
                    <?php beans_site_title_tag(); ?>
                </div>
            </div>
            
            <div class="uk-container uk-container-center tm-medium-container uk-text-center">
                <div class="uk-grid uk-grid-width-1-1 uk-margin-large">
                    <p class="uk-margin-bottom-remove"><a title="Download Beans WordPress theme framework" class="uk-button uk-button-primary uk-button-large uk-margin-small-top" href="http://www.getbeans.io/download-beans/?no_cache=1">Download for free</a></p>
                </div>
            </div>
        </div>
    </div>

	<?php

}

////////

// Load document which is always needed at the bottom of template files.
beans_load_document();