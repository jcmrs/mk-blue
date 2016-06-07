<?php
/* Template name: Test Tabs */

// UIKit Components.
add_action( 'beans_uikit_enqueue_scripts', 'mk_test_tab_complete' );

function mk_test_tab_complete() {

	beans_uikit_enqueue_components( true );
	beans_uikit_enqueue_components( true, 'add-ons' );
	
}

// Remove comment and content div for test page.
beans_remove_action( 'beans_comments_template' );
beans_remove_markup( 'beans_post_content' );

// Remove layout control to force full-width.
add_filter( 'beans_layout', '__return_false' );

// Append typography demo content.
add_action( 'beans_post_body_before_markup', 'test_tab' );

function test_tab() {

	?>

    <div class="uk-container uk-container-center">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-small-1-2 uk-width-medium-1-3">
                <div class="uk-panel">
                    <div class="uk-grid">
                        <div class="uk-width-1-6">
                            <i class="uk-icon-plane uk-icon-medium"></i>
                        </div>
                        <div class="uk-width-5-6">
                            <h5 class="uk-display-inline-block uk-margin-bottom-remove uk-margin-small-right">Free Delivery</h5><br class="uk-hidden-large">From $60 order
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-width-small-1-2 uk-width-medium-1-3">
                <div class="uk-panel">
                    <div class="uk-grid">
                        <div class="uk-width-1-6">
                            <i class="uk-icon-globe uk-icon-medium"></i>
                        </div>
                        <div class="uk-width-5-6">
                            <h5 class="uk-display-inline-block uk-margin-bottom-remove uk-margin-small-right">Worldwide shipping</h5><br class="uk-hidden-large">240 countries
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-width-small-1-2 uk-width-medium-1-3">
                <div class="uk-panel">
                    <div class="uk-grid">
                        <div class="uk-width-1-6">
                            <i class="uk-icon-history uk-icon-medium"></i>
                        </div>
                        <div class="uk-width-5-6">
                            <h5 class="uk-display-inline-block uk-margin-bottom-remove uk-margin-small-right">Free return</h5><br class="uk-hidden-large">2 weeks time
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="uk-container uk-container-center">

        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#home-product-slider'}">
                        <li class="uk-width-small-1-3 uk-active"><a href="#">Topseller</a></li>
                        <li class="uk-width-small-1-3"><a href="#">Must have</a></li>
                        <li class="uk-width-small-1-3"><a href="#">Best sale</a></li>
                    </ul>
                    <ul id="home-product-slider" class="uk-switcher uk-margin">
                        <li class="uk-active">
                            <div class="uk-slidenav-position" data-uk-slider data-uk-check-display>

                                <div class="uk-slider-container">
                                    <ul class="uk-slider uk-grid uk-grid-width-small-1-2 uk-grid-width-medium-1-3">
                                        <li>
                                            <div class="uk-panel">
                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Workboots</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Men,</a> <a href="shop.html">Shoes,</a> <a href="shop.html">Boots</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">$119.90</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <div class="uk-panel-badge uk-badge uk-badge-danger">Sale</div>

                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Leather Belt</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Men,</a> <a href="shop.html">Belts</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">
                                                    <del>$49.90</del><br class="uk-hidden-large">
                                                    <ins>$39.90</ins>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <div class="uk-panel-badge uk-badge">Out of stock</div>

                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Smart Satchel</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Bags,</a> <a href="shop.html">Satchel</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">$64.90</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">America Bag</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Bags,</a> <a href="shop.html">Backpack</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">$49.90</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#" class="bh-slider-prev" data-uk-slider-item="previous"></a>
                                <a href="#" class="bh-slider-next" data-uk-slider-item="next"></a>

                            </div>
                        </li>
                        <li>
                            <div class="uk-slidenav-position" data-uk-slider data-uk-check-display>

                                <div class="uk-slider-container">
                                    <ul class="uk-slider uk-grid uk-grid-width-small-1-2 uk-grid-width-medium-1-3">
                                        <li>
                                            <div class="uk-panel">
                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Retro Alarm Clock</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Home,</a> <a href="shop.html">Alarm Clock</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">$24.90</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Classic Watch</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Accessoires,</a> <a href="shop.html">Watch</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">$129.90</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <div class="uk-panel-badge uk-badge uk-badge-danger">Sale</div>
                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Wayfarer Glasses</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Accessoires,</a> <a href="shop.html">Sunglasses</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">
                                                    <del>$99.90</del><br class="uk-hidden-large">
                                                    <ins>$89.90</ins>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <div class="uk-panel-badge uk-badge uk-badge-danger">Sale</div>
                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Harvard Satchel</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Men,</a> <a href="shop.html">Bags,</a> <a href="shop.html">Satchel</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">
                                                    <del>$99.90</del><br class="uk-hidden-large">
                                                    <ins>$79.90</ins>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#" class="bh-slider-prev" data-uk-slider-item="previous"></a>
                                <a href="#" class="bh-slider-next" data-uk-slider-item="next"></a>

                            </div>
                        </li>
                        <li>
                            <div class="uk-slidenav-position" data-uk-slider data-uk-check-display>

                                <div class="uk-slider-container">
                                    <ul class="uk-slider uk-grid uk-grid-width-small-1-2 uk-grid-width-medium-1-3">
                                        <li>
                                            <div class="uk-panel">
                                                <div class="uk-panel-badge uk-badge uk-badge-danger">Sale</div>
                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Leather Belt</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Men,</a> <a href="shop.html">Belts</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">
                                                    <del>$49.90</del><br class="uk-hidden-large">
                                                    <ins>$39.90</ins>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <div class="uk-panel-badge uk-badge uk-badge-danger">Sale</div>
                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Retro Satchel</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Bags,</a> <a href="shop.html">Satchel</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">
                                                    <del>$119</del><br class="uk-hidden-large">
                                                    <ins>$99</ins>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <div class="uk-panel-badge uk-badge uk-badge-danger">Sale</div>

                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Backpack Leather</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Bags,</a> <a href="shop.html">Backpack</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">
                                                    <del>$89.90</del><br class="uk-hidden-large">
                                                    <ins>$79.90</ins>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-panel">
                                                <div class="uk-panel-badge uk-badge uk-badge-danger">Sale</div>

                                                <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
                                                    <a class="uk-position-cover" href="shop-singleproduct.html"></a>
                                                    <img src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image">
                                                    <img class="bh-overlay-image-hover" src="http://placehold.it/720x540&text=demo" width="720" height="540" alt="Product Image Overlay">
                                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                                                        <div>
                                                            <div class="uk-button-group uk-width-1-1">
                                                                <a href="shop-cart.html" class="uk-button uk-button-large uk-width-8-10">Add to cart</a>
                                                                <a href="shop-wishlist.html" class="uk-button uk-button-large uk-width-2-10"><i class="uk-icon-star"></i></a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>

                                                <div class="uk-float-left uk-margin-top">
                                                    <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Wayfarer Glasses</a></h3>
                                                    <p class="uk-margin-remove"><a href="shop.html">Accessoires,</a> <a href="shop.html">Sunglasses</a></p>
                                                </div>
                                                <span class="uk-float-right uk-margin-top uk-text-large">
                                                    <del>$99.90</del>
                                                    <ins>$89.90</ins>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#" class="bh-slider-prev" data-uk-slider-item="previous"></a>
                                <a href="#" class="bh-slider-next" data-uk-slider-item="next"></a>

                           </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

	<?php

}

// Load document which is always needed at the bottom of template files.
beans_load_document();