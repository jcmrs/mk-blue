<?php

/* Template name: Section */

// Set the default layout to content only.
beans_add_filter( 'beans_layout', 'c' );

// Load necessary UIkit components.
add_action( 'beans_uikit_enqueue_scripts', 'blue_section_view_enqueue_uikit_assets' );

function blue_section_view_enqueue_uikit_assets() {

	beans_uikit_enqueue_components( array( 'contrast', 'scrollspy', 'smooth-scroll' ), 'core' );
	beans_uikit_enqueue_components( array( 'offcanvas' ), 'add-ons' );

}

// Setup Section View
add_action( 'beans_before_load_document', 'blue_section_setup' );

function blue_section_setup() {
    beans_remove_action( 'beans_site_title_tag' );
}

// Add Header Bar

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

// Load Beans
beans_load_document();