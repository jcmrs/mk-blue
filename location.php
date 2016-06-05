<?php
/* Template name: Location */

// Load necessary UIkit components.
add_action( 'beans_uikit_enqueue_scripts', 'group_view_enqueue_uikit_assets' );

function group_view_enqueue_uikit_assets() {

	beans_uikit_enqueue_components( array( 'flex', 'animation', 'contrast', 'overlay', 'thumbnail', 'modal', 'scrollspy', 'smooth-scroll', 'tab' ), 'core' );
	beans_uikit_enqueue_components( array( 'sticky', 'offcanvas' ), 'add-ons' );

}

////////

// Add Location Bar.
add_action( 'beans_post_content_append_markup', 'location_bar' );

function location_bar() {

	?>
	<div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.uk-panel'}>
	    
        <div class="uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
            <div class="blue-location-bar uk-panel uk-panel-box uk-panel-box-primary uk-border-rounded uk-contrast">
                <div itemscope itemtype="http://schema.org/LocalBusiness">
                    <span itemprop="name">name</span>
                    <span itemprop="description">description</span>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span itemprop="streetAddress">address</span>
                        <span itemprop="addressLocality">locality</span>
                        <span itemprop="addressRegion">region</span>
                        <span itemprop="postalCode">postalcode</span>
                        <span itemprop="telephone">phone</span>
                        <a href="mailto:info@mail.net" itemprop="email">mail</a>
                        <a href="/rotterdam" itemprop="url">url</a>
                        <time itemprop="openingHours" datetime="Mo-Fr 07:00-21:00"></time>
                        <time itemprop="openingHours" datetime="Sa 09:00-17:00"></time>
                    </div>
                    <div itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo"><meta itemprop="latitude" content="5.5" /><meta itemprop="longitude" content="4.4" /></div>
                    <meta itemprop="branchOf" content="brandbranche" />
                </div>
            </div>
        </div>

        <div class="uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
            <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-border-rounded">
                <div itemscope itemtype="http://schema.org/LocalBusiness">
                	<div itemprop="name">Company</div>
                	<div>Email: <span itemprop="email"><a href='mailto:info@mail.net'>info@mail.net</a></span></div>
                	<div>Phone: <span itemprop="telephone">0000000000</span></div>
                	<div>Fax: <span itemprop="faxNumber">0000000000</span></div>
                	<div>Url: <span itemprop="url"><a href='https://www.medischekeuringen.net/rotterdam'>https://www.medischekeuringen.net/rotterdam</a></span></div>
                
                	<div itemprop="paymentAccepted"  style='display: none' >cash, invoice</div>
                	<meta itemprop="openingHours"  style='display: none'  datetime="Mo,Tu,We,Th,Fr,Sa 07:00-21:00" />
                	<div itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo">
                		<meta itemprop="latitude" content="5.5" />
                		<meta itemprop="longitude" content="4.4" />
                	</div>
                	<div itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
                		<div itemprop="streetAddress">Street</div>
                		<div>
                		    <span itemprop="addressLocality">City</span>
                		    <span itemprop="addressRegion">ZH</span>
                		    <span itemprop="postalCode">6132CX</span>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        
        <div class="uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
            <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-border-rounded">
                <div itemscope itemtype="http://schema.org/LocalBusiness">
                    <h3 itemprop="name">company</h3>
                    <span itemprop="email">info@mail.net</span>
                    <span itemprop="telephone">0850091562</span>
                    <span itemprop="faxNumber">0850091562</span>
                    <meta itemprop="logo" content="https://www.domain.com/logo.png" />
                    <meta itemprop="url" content="https://www.domain.com/rotterdam" />
                    <span itemprop="description">description text</span>
                    <meta itemprop="openingHours" content="Mo-Fr 07:00-21:00" />
                    <meta itemprop="branchOf" content="BrandName" />
                    <span itemprop="sameAs">http://www.facebook.com</span>
                    <span itemprop="sameAs">http://www.facebook.com</span>
                    <span itemprop="sameAs">http://www.facebook.com</span>
                    <span itemprop="sameAs">http://www.facebook.com</span>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span itemprop="streetAddress">street</span>
                        <span itemprop="postalCode">0000AA</span>
                        <span itemprop="addressLocality">Stad</span>
                        <span itemprop="addressRegion">ZH</span>
                    </div>
                    <div itemscope itemtype="http://schema.org/GeoCoordinates">
                        <meta itemprop="latitude" content="5.5" />
                        <meta itemprop="longitude" content="4.4" />
                    </div>
                </div>
            </div>
        </div>
        
    </div>
	<?php

}

// Add Route Bar.
beans_add_smart_action( 'beans_post_content_append_markup', 'location_route_bar' );

function location_route_bar() {

	?>
	<div class="route-bar uk-width-large-1-1 uk-width-medium-1-2 uk-text-middle uk-text-center uk-text-center-small uk-text-contrast uk-margin-large">
		<a href="#" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-small-bottom" title="Plan Uw route">Plan Uw route</a>
	</div>
	<?php

}

////////

// Load document which is always needed at the bottom of template files.
beans_load_document();