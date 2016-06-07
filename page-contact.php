<?php
/* Template name: Contact */

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

beans_remove_action( 'beans_site_title_tag' );

// Introduce different logo's per breakpoint
beans_modify_action_callback( 'beans_site_branding', 'mk_logo' );

function mk_logo() {

    ?>
    <picture>
        <source media="(max-width: 480px)" srcset="https://mk-blue-jcmrs.c9users.io/wp-content/uploads/logo-small.png">
        <source media="(max-width: 960px)" srcset="https://mk-blue-jcmrs.c9users.io/wp-content/uploads/logo-medium.png">
        <img src="https://mk-blue-jcmrs.c9users.io/wp-content/uploads/logo-medium.png" alt="Medische Keuringen">
    </picture>
    <?php

}

add_action( 'beans_site_before_markup', 'blue_splash_bar' );

function blue_splash_bar() {

	?>
	<div class="blue-splash-bar uk-grid uk-height-viewport" data-uk-grid-margin>
	    

            <div class="uk-width-1-1 uk-flex uk-flex-center uk-flex-middle">
                <div class="uk-text-center uk-grid" data-uk-grid-margin>
                    <div class="uk-width-1-1 uk-align-center uk-responsive-width uk-responsive-height">
                        <?php beans_site_branding(); ?>
                    </div>
                    <div class="uk-width-1-1 uk-text-center uk-contrast">
                        <h1><?php beans_site_title_tag(); ?></h1>
                        <p class="uk-text-bold">As div background, no info windows, just add feature buttons on top.</p>
                        <p>
                            <a href="#beans-header" class="uk-button uk-button-large" data-uk-scrollspy data-uk-smooth-scroll="{offset: 5}">Get Route</a>
                            <a class="uk-button uk-button-large" href="#">Get Contact</a>
                            <a class="uk-button" href="#modal-blank" data-uk-modal>Blank (Fullscreen)</a>
                        </p>
                    </div>
                </div>
            </div>


    </div>
	<?php

}

add_action( 'beans_body_after_markup', 'fullscreen-modal' );

function fullscreen_modal() {
    
    ?>
    <div id="modal-blank" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-blank">
            <button class="uk-modal-close uk-close" type="button"></button>
            <div class="uk-grid uk-flex-middle" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-height-viewport uk-cover-background" style="background-image: url('http://unsplash.it/600/600');"></div>
                <div class="uk-width-medium-1-2">
                    <h1>Modal Blank</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    }


beans_add_attribute( "blue_stellar_places_bar", "data-uk-parallax", "{ bg: '-50,50', opacity: '1,0.5' }" );

// beans_add_attribute( 'beans_header', 'class', 'uk-height-viewport' );

////////

// Load document which is always needed at the bottom of template files.
beans_load_document();