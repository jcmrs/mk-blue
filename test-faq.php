<?php
/* Template name: Test FAQ */

// UIKit Components.
add_action( 'beans_uikit_enqueue_scripts', 'mk_test_faq_complete' );

function mk_test_faq_complete() {

	beans_uikit_enqueue_components( true );
	beans_uikit_enqueue_components( true, 'add-ons' );
	
}

// Remove comment and content div for test page.
beans_remove_action( 'beans_comments_template' );
beans_remove_markup( 'beans_post_content' );

// Remove layout control to force full-width.
add_filter( 'beans_layout', '__return_false' );

// Append typography demo content.
add_action( 'beans_post_body_before_markup', 'test_faq' );

function test_faq() {

	?>

    <div class="uk-container uk-container-center">
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-large-1-3">
                <div class="uk-panel uk-panel-box">
                    <h1><span class="uk-text-primary">Bal</span>zac</h1>
                    <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro quaeritis.</p>
                    <div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">

                        <div class="uk-width-2-10">
                            <i class="uk-icon-map-marker"></i>
                        </div>

                        <div class="uk-width-8-10">
                            Storgata 166, Hus 6<br>
                            0182 Oslo
                        </div>

                        <div class="uk-width-2-10">
                            <i class="uk-icon-phone"></i>
                        </div>

                        <div class="uk-width-8-10">
                            +47 (22) 123 456
                        </div>

                        <div class="uk-width-2-10">
                            <i class="uk-icon-envelope-o"></i>
                        </div>

                        <div class="uk-width-8-10">
                            <a href="mailto:email@company.com">email@company.com</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="uk-width-large-2-3">
                <div class="uk-grid" data-uk-grid-match>
                    <div class="uk-width-small-1-2 uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-space uk-text-center-small">
                            <p class="bh-text-uppercase">Shopping guide</p>
                            <ul class="uk-list">
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Payment</a></li>
                                <li><a href="#">Shipping</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="uk-width-small-1-2 uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-space uk-text-center-small">
                            <p class="bh-text-uppercase">Company</p>
                            <ul class="uk-list uk-panel-space">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Store Locator</a></li>
                                <li><a href="#">Work with Us</a></li>
                                <li><a href="#">Franchise</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="uk-width-small-1-2 uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-space uk-text-center-small">
                            <p class="bh-text-uppercase">Help</p>
                            <ul class="uk-list">
                                <li><a href="#">Fashion Finder</a></li>
                                <li><a href="#">Track Order</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-small-1-2 uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-space uk-text-center-small">
                            <p class="bh-text-uppercase">General</p>
                            <ul class="uk-list uk-panel-space">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy & Cookies</a></li>
                                <li><a href="#">Store directory</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="uk-width-small-1-2 uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-space uk-text-center-small">
                            <p class="bh-text-uppercase">Follow Us</p>
                            <ul class="uk-list">
                                <li data-uk-margin>
                                    <a href="#" class="uk-icon-button uk-icon-twitter"></a>
                                    <a href="#" class="uk-icon-button uk-icon-facebook"></a>
                                    <a href="#" class="uk-icon-button uk-icon-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-small-1-2 uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-space uk-text-center-small">
                            <p class="bh-text-uppercase">Payment</p>
                            <ul class="uk-list uk-margin-remove">
                                <li>
                                    <a href="#"><i class="uk-icon-cc-mastercard uk-text-large"></i></a>
                                    <a href="#"><i class="uk-icon-cc-visa uk-text-large"></i></a>
                                    <a href="#"><i class="uk-icon-cc-amex uk-text-large"></i></a>
                                    <a href="#"><i class="uk-icon-cc-paypal uk-text-large"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

	<?php

}

// Load document which is always needed at the bottom of template files.
beans_load_document();