<?php
/* Template name: Contact */

// Load necessary UIkit components.
add_action( 'beans_uikit_enqueue_scripts', 'group_view_enqueue_uikit_assets' );

function group_view_enqueue_uikit_assets() {

	beans_uikit_enqueue_components( array( 'contrast', 'thumbnail', 'scrollspy', 'smooth-scroll' ), 'core' );
	beans_uikit_enqueue_components( array( 'sticky', 'offcanvas' ), 'add-ons' );

}

////////

// New Stellar Places area.
beans_add_smart_action( 'beans_header_append_markup', 'blue_stellar_places_bar' );

function blue_stellar_places_bar() {

	?>
	<div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">

            <div class="uk-vertical-align uk-text-center" style="background: url('https://mk-blue-jcmrs.c9users.io/wp-content/uploads/vestigingen.jpg') 50% 50% no-repeat; height: 90vh;">
                <div class="uk-vertical-align-middle uk-width-1-2">
                    <h4>Stellar Places Map</h4>
                    <p class="uk-text-large">As div background, no info windows, just add feature buttons on top. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo.</p>
                    <p>
                        <a class="uk-button uk-button-primary uk-button-large" href="#">Get Route</a>
                        <a class="uk-button uk-button-large" href="#">Get Contact</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
	<?php

}

beans_add_attribute( "blue_stellar_places_bar", "data-uk-parallax", "{ bg: '-50,50', opacity: '1,0.5' }" );

beans_add_attribute( 'beans_header', 'class', 'uk-height-viewport' );

////////

// Load document which is always needed at the bottom of template files.
beans_load_document();