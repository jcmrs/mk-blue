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

//////// Beans General ends here ////////

load_child_theme_textdomain( 'tm-beans', get_stylesheet_directory() . '/languages/' );

//////// Beans Site-wide Functionality starts here ////////

// Disable comments on pages.
add_action( 'init', 'blue_remove_page_comments' );

function blue_remove_page_comments() {

  remove_post_type_support( 'page', 'comments' );
  
}

// Add Custom Javascript
add_action( 'beans_uikit_enqueue_scripts', 'blue_custom_js_view_enqueue_uikit_assets' );

function blue_custom_js_view_enqueue_uikit_assets() {

    beans_compiler_add_fragment( 'uikit', get_stylesheet_directory() . '/assets/custom.js', 'js' );

}

// Remove Active from Breadcrumbs
beans_add_attribute( 'beans_breadcrumb_item[_active]', 'class', 'uk-hidden' );

// Add sticky to Navbar
// beans_add_attribute( 'beans_header', 'data-uk-sticky', 'top:0' );

// Add Back to Top.
add_action( 'beans_body_prepend_markup', 'back_to_top_anchor' );

function back_to_top_anchor() {

    ?><div id="mk-top"></div><?php

}

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

// Add Header Bar
beans_remove_action( 'beans_site_title_tag' );

add_action( 'beans_header_before_markup', 'blue_header_bar' );

function blue_header_bar() {

	?>
	<div class="blue-header-bar uk-block-muted">
		
		<div class="uk-container uk-container-center uk-text-justify">
			
			<div class="uk-grid uk-contrast" data-uk-grid-match data-uk-margin>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-left uk-text-middle uk-text-center-medium uk-text-center-small uk-hidden-medium uk-hidden-small">
    			    <?php beans_site_title_tag(); ?>
    			</div>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-right uk-text-middle uk-text-center-medium uk-text-center-small">
    				<a href="#"><i class="uk-icon-map-marker"></i> Locaties</a> <a href="mailto:info@mail.net"><i class="uk-icon-envelope"></i> info @ mail.net</a> <a href="tel:1-562-867-5309"><i class="uk-icon-phone-square"></i> 562-867-5309</a>
    			</div>
			</div>
			
			
		</div>
		
	</div>
	<?php

}

// Add Content Bar.
beans_remove_action( 'beans_breadcrumb' );
beans_remove_action( 'beans_post_title' );

add_action( 'beans_post_image_before_markup', 'blue_content_bar' );

function blue_content_bar() {

	?>
	<div class="blue-content-bar uk-block-muted uk-text-justify">
		
		<div class="uk-container uk-container-center">
			
			<div class="uk-grid" data-uk-grid-match data-uk-margin>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-left uk-text-middle uk-text-center-medium uk-text-center-small uk-hidden-medium uk-hidden-small">
    			    <?php beans_breadcrumb(); ?>
    			</div>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-right uk-text-middle uk-text-center-medium uk-text-center-small">
    			    <?php beans_post_title(); ?>
    			</div>
			</div>
			
		</div>
		
	</div>
	<?php

}

// Modify Post Title.
beans_add_attribute( 'beans_post_title', 'class', 'uk-text-muted uk-text-right uk-h6' );

// Adding tel: link to beans_site_title_tag.
add_action( 'beans_post_title_append_markup', 'blue_call_beans_post_title_append_markup' );

function blue_call_beans_post_title_append_markup() {

	echo ' - bel <a href="tel:1-562-867-5309">562-867-5309</a>';
	
}

// Add Contact Bar.
add_action( 'beans_post_content_after_markup', 'blue_contact_bar' );

function blue_contact_bar() {

	?>
	<div class="blue-contact-bar uk-width-large-1-1 uk-width-medium-1-1 uk-text-middle uk-text-center uk-text-center-small uk-text-contrast uk-margin-large">
		<a href="https://mk-blue-jcmrs.c9users.io/contact/" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-small-bottom" title="Neem nu contact op!">Neem nu contact op!</a>
	</div>
	<?php

}

// Add Back to Top Bar.
add_action( 'beans_post_content_after_markup', 'blue_back_to_top_bar' );

function blue_back_to_top_bar() {

	?>
	<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-text-middle uk-text-center uk-text-center-small uk-text-break uk-margin-large">
		<a href="#mk-top" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-small-bottom" title="Terug naar boven" data-uk-smooth-scroll><i class="uk-icon-arrow-up"></i></a>
	</div>
	<?php

}

// New Random Quote (Widget) area.
add_action( 'widgets_init', 'blue_quote_widget' );

function blue_quote_widget() {

    beans_register_widget_area( array(
        'name' => 'Quote',
        'id' => 'quote',
        'beans_type' => 'grid'
    ) );

}

// Display the Quote widget area in the front end.
add_action( 'beans_footer_before_markup', 'blue_quote_widget_bar' );

function blue_quote_widget_bar() {

	?>
	<div class="blue-quote-bar uk-block">
    	<div class="uk-block uk-container uk-container-center uk-text-center uk-vertical-align">
    	    <div class="uk-panel uk-vertical-align-middle uk-contrast uk-text-break">
		        <?php echo beans_widget_area( 'quote' ); ?> 
	        </div>
    	</div>
	</div>
    <?php

}

// Replace default Footer Content.
beans_modify_action_callback( 'beans_footer_content', 'beans_child_footer_content' );
function beans_child_footer_content() {

    ?>
    <div class="uk-grid uk-container-center" data-uk-grid-margin>
        <div class="uk-width-large-1-1 uk-width-medium-1-1 uk-text-center uk-text-middle uk-text-center-medium uk-text-center-small">
    		<a href="#"><i class="uk-icon-sitemap"></i> Privacy</a> <a href="#"><i class="uk-icon-map-marker"></i> Locaties</a> <a href="mailto:info@mail.net"><i class="uk-icon-envelope"></i> info @ mail.net</a> <a href="tel:1-562-867-5309"><i class="uk-icon-phone-square"></i> 562-867-5309</a> <a href="#"><i class="uk-icon-sitemap"></i> Sitemap</a>
		</div>
    </div>
    <?php
}

//////// New Areas end here ////////

//////// Customisations start here ////////

// Modify Beans Widget Title.
beans_modify_markup( 'beans_widget_title', 'h4' );

// beans_add_attribute( "beans_post_image", "data-uk-parallax", "{ bg: '-100,100', opacity: '1,0.5' }" );
// beans_add_attribute( 'beans_post_image', 'class', 'uk-animation-fade uk-animation-hover uk-animation-3' );

// Modify Beans Main.
// beans_add_attribute( 'beans_main', 'class', 'uk-margin-bottom-remove' );
beans_add_attribute( 'beans_main', 'class', 'uk-padding-remove' );
// beans_add_attribute( 'beans_main', 'class', 'uk-padding-top-remove' );

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
// require_once( get_stylesheet_directory() . '/assets/helpers/alert.php' );