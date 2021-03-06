<?php

// Language please!
load_child_theme_textdomain( 'tm-beans', get_stylesheet_directory() . '/languages/' );

// Remove comments on pages.
add_action( 'init', 'blue_remove_page_comments' );

function blue_remove_page_comments() {

  remove_post_type_support( 'page', 'comments' );
  
}

// Add sticky to Navbar
// beans_add_attribute( 'beans_header', 'data-uk-sticky', 'top:0' );

// Remove Site Title Tag
beans_remove_action( 'beans_site_title_tag' );

// Remove Active from Breadcrumbs
beans_add_attribute( 'beans_breadcrumb_item[_active]', 'class', 'uk-hidden' );

// Modify Beans Main.
beans_add_attribute( 'beans_main', 'class', 'uk-padding-remove' );
// beans_add_attribute( 'beans_main', 'class', 'uk-padding-top-remove' );
// beans_add_attribute( 'beans_main', 'class', 'uk-margin-bottom-remove' );

// Add Back to Top.
add_action( 'beans_body_prepend_markup', 'back_to_top_anchor' );

function back_to_top_anchor() {

    ?><div id="blue-top"></div><?php

}

// Modify Beans Widget Title.
beans_modify_markup( 'beans_widget_title', 'h4' );

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
		<a href="#blue-top" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-small-bottom" title="Terug naar boven" data-uk-smooth-scroll><i class="uk-icon-arrow-up"></i></a>
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
    <div class="uk-container uk-container-center">
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-large-1-3">
                <div class="uk-panel uk-panel-box">
                    <h1><span class="uk-text-primary">Blue</span>Beans</h1>
                    <p>Lorem ipsum reversus ab viral inferno, nam rick grimes malum cerebro quaeritis.</p>
                    <div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">

                        <div class="uk-width-2-10">
                            <i class="uk-icon-map-marker"></i>
                        </div>

                        <div class="uk-width-8-10">
                            Street 42<br>
                            0182 AA City
                        </div>

                        <div class="uk-width-2-10">
                            <i class="uk-icon-phone"></i>
                        </div>

                        <div class="uk-width-8-10">
                            +31 (0)00 000 0000
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