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

    <div class="uk-grid" data-uk-grid-margin>
        
    	<div class="uk-width-medium-1-1">
            <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Griepvaccinatie</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Medewerkerstevredenheidsonderzoek</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Gezond Werken en Onregelmatig Werk</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Fysieke Belasting en Arbeidsomstandigheden</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Psychosociale Arbeidsbelasting (werkdruk)</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Duurzame Inzetbaarheid</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Vitaliteit en Productiviteit</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Conditie- / Fit Test</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Work Ability Index</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module ECG in rust</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module ECG inspanning</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Oogonderzoek / Beeldschermonderzoek</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Spirometrie</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Audiometrie</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Biometrie</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Urineonderzoek</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Bloedonderzoek Vingerprik</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Bloedonderzoek (groot / V411)</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Bloedonderzoek (groot / V412)</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Informatiepakket</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Groepsanalyse</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        <div class="uk-width-medium-1-1">
             <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-hover" href="" uk-panel-header uk-border-rounded">
                <h3 class="uk-panel-title">PMO Module Managementrapportage</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
        
        
    </div>

	<?php

}

// Load document which is always needed at the bottom of template files.
beans_load_document();