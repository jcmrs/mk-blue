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

// Remove this action and callback function if you are not adding CSS in the style.css file.
add_action( 'wp_enqueue_scripts', 'beans_child_enqueue_assets' );

function beans_child_enqueue_assets() {

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

}

// UIKit Components.
add_action( 'beans_uikit_enqueue_scripts', 'mk_uikit_complete' );

function mk_uikit_complete() {

	beans_uikit_enqueue_components( true );
	beans_uikit_enqueue_components( true, 'add-ons' );
	
}

//////// Beans General ends here ////////

//////// Beans Site-wide Functionality starts here ////////

// Disable comments on pages.
add_action( 'init', 'mk_remove_page_comments' );

function mk_remove_page_comments() {

  remove_post_type_support( 'page', 'comments' );
  
}

// Add Custom Javascript
add_action( 'beans_uikit_enqueue_scripts', 'mk_custom_js_view_enqueue_uikit_assets' );

function mk_custom_js_view_enqueue_uikit_assets() {

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
        'resize' => array( 800, 200, true ),
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
			
			<div class="uk-grid" data-uk-grid-match data-uk-margin>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-left uk-text-middle uk-text-center-medium uk-text-center-small">
    			    <?php beans_site_title_tag(); ?>
    			</div>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-right uk-text-middle uk-text-center-medium uk-text-center-small">
    			    IconList
    			</div>
			</div>
			
			
		</div>
		
	</div>
	<?php

}

// Add Content Bar.
beans_remove_action( 'beans_breadcrumb' );
beans_remove_action( 'beans_post_title' );
add_action( 'beans_header_before_markup', 'blue_content_bar' );

function blue_content_bar() {

	?>
	<div class="blue-content-bar uk-block-muted">
		
		
		<div class="uk-container uk-container-center uk-text-justify">
			
			<div class="uk-grid" data-uk-grid-match data-uk-margin>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-left uk-text-middle uk-text-center-medium uk-text-center-small">
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
add_action( 'beans_post_title_append_markup', 'blue_beans_post_title_append_markup' );

function blue_beans_post_image_before_markup() {

	echo ' - bel <a href="tel:1-562-867-5309">562-867-5309 </a>';
	
}

// Add Contact Bar.
add_action( 'beans_post_content_after_markup', 'blue_contact_bar' );

function blue_contact_bar() {

	?>
	<div class="blue-contact-bar uk-width-large-1-1 uk-width-medium-1-2 uk-text-middle uk-text-center uk-text-center-small uk-text-contrast uk-margin-large">
		<a href="#" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-small-bottom" title="Neem nu contact op!">Neem nu contact op!</a>
	</div>
	<?php

}

// Add Back to Top Bar.
add_action( 'beans_post_content_after_markup', 'blue_back_to_top_bar' );

function blue_back_to_top_bar() {

	?>
	<div class="uk-width-large-1-1 uk-width-medium-1-2 uk-text-middle uk-text-center uk-text-center-small uk-text-break uk-margin-large">
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

// New CTA area.
beans_add_smart_action( 'beans_footer_before_markup', 'blue_cta_bar' );

function blue_cta_bar() {

	?>
	<div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">

            <div class="uk-vertical-align uk-text-center" style="background: url('https://mk-blue-jcmrs.c9users.io/wp-content/uploads/vestigingen.jpg') 50% 0 no-repeat; height: 450px;">
                <div class="uk-vertical-align-middle uk-width-1-2">
                    <h3>Sample Heading</h3>
                    <p class="uk-text-large">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo.</p>
                    <p>
                        <a class="uk-button uk-button-primary uk-button-large" href="#">Button</a>
                        <a class="uk-button uk-button-large" href="#">Button</a>
                    </p>
                </div>
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

// Modify Beans Main. Remove top & bottom padding.
beans_add_attribute( 'beans_main', 'class', 'uk-padding-remove' );

// Replace site title tag styling
beans_replace_attribute( 'beans_site_title_tag', 'class', 'uk-text-muted', 'uk-text-left uk-text-break uk-text-small uk-text-contrast' );



//////// Testing Tweaks start here ////////

add_action( 'beans_body_append_markup', 'example_fancy_uikit_components' );

function example_fancy_uikit_components() {

    // Stop here if Beans is not in dev mode.
    if ( !get_option( 'beans_dev_mode', false ) ) {
        return;
    }

    global $_beans_uikit_enqueued_items;

    ?>
    <a href="#example-uikit-list" class="uk-button-text uk-float-right uk-margin-right uk-margin-bottom" data-uk-offcanvas=""><i class="uk-icon-cog uk-margin-small-right"></i>UIkit components</a>
    <div id="example-uikit-list" class="uk-offcanvas">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
            <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="{multiple:true}">
                <li class="uk-nav-header">UIkit components</li>
                <li class="uk-parent uk-active">
                    <a href="#">Core</a>
                    <ul class="uk-nav-sub">
                        <?php foreach ( $_beans_uikit_enqueued_items['components']['core'] as $core ) : ?>
                            <li><a href="#"><?php echo $core; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="uk-parent uk-active">
                    <a href="#">Add-ons</a>
                    <ul class="uk-nav-sub">
                        <?php foreach ( $_beans_uikit_enqueued_items['components']['add-ons'] as $addons ) : ?>
                            <li><a href="#"><?php echo $addons; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <?php

}

//////// Testing Tweaks end here ////////

//////// WP Tweaks start here ////////

// Clean the Head.
remove_action(‘wp_head’, ‘rsd_link’); 
remove_action(‘wp_head’, ‘wp_generator’); 
remove_action(‘wp_head’, ‘feed_links’, 2); 
remove_action(‘wp_head’, ‘feed_links_extra’, 3); 
remove_action(‘wp_head’, ‘index_rel_link’);
remove_action(‘wp_head’, ‘wlwmanifest_link’); 
remove_action(‘wp_head’, ‘start_post_rel_link’, 10, 0); 
remove_action(‘wp_head’, ‘parent_post_rel_link’, 10, 0);
remove_action(‘wp_head’, ‘adjacent_posts_rel_link’, 10, 0);
remove_action(‘wp_head’, ‘adjacent_posts_rel_link_wp_head’, 10, 0 );
remove_action(‘wp_head’, ‘wp_shortlink_wp_head’, 10, 0 );
// remove_action(‘wp_head’, ‘rel_canonical’, 10, 0 );

// Disable any and all mention of emoji's.
// Source code credit: http://ottopress.com/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );   
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );     
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

// Yoast JSON-LD
add_filter('disable_wpseo_json_ld_search', '__return_true'); 

//////// WP Tweaks end here ////////