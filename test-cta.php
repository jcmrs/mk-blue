<?php
/* Template name: Test CTA */

// UIKit Components.
add_action( 'beans_uikit_enqueue_scripts', 'mk_test_cta_complete' );

function mk_test_cta_complete() {

	beans_uikit_enqueue_components( true );
	beans_uikit_enqueue_components( true, 'add-ons' );
	
}

// Remove comment and content div for test page.
beans_remove_action( 'beans_comments_template' );
beans_remove_markup( 'beans_post_content' );

// Remove layout control to force full-width.
add_filter( 'beans_layout', '__return_false' );

// Append demo content.
add_action( 'beans_post_body_before_markup', 'test_cta' );

function test_cta() {

	?>
	
	<div class="uk-container uk-container-center">
        <div class="uk-panel">
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'> div > .uk-panel'}">

                <div class="uk-width-medium-7-10 uk-text-center-small">
                    <div class="uk-panel">
                        <h3 class="uk-margin-bottom-remove">mortuis soulless creaturas, imo evil stalking monstra</h3>
                        <p class="uk-margin-top-remove">Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus.</p>
                    </div>
                </div>

                <div class="uk-width-medium-2-10 uk-text-center-small">
                    <div class="uk-panel uk-flex uk-flex-middle">
                        <button class="uk-button uk-button-primary">Purchase now</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

	<?php

}

// Load document which is always needed at the bottom of template files.
beans_load_document();