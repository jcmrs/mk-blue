<?php
/* Template name: Group */

// Load necessary UIkit components.
add_action( 'beans_uikit_enqueue_scripts', 'group_view_enqueue_uikit_assets' );

function group_view_enqueue_uikit_assets() {

	beans_uikit_enqueue_components( array( 'flex', 'animation', 'contrast', 'overlay', 'thumbnail', 'modal', 'scrollspy', 'smooth-scroll', 'tab' ), 'core' );
	beans_uikit_enqueue_components( array( 'lightbox', 'slider', 'slideshow', 'accordion', 'slideshow-fx', 'sticky', 'tooltip', 'progress', 'modal', 'offcanvas' ), 'add-ons' );

}

////////

add_action( 'admin_init', 'blue_group_post_meta', 8 );

function blue_group_post_meta() {

    $total = 3;

    for ( $i = 1; $i <= $total; $i++ ) {

        $fields = array(
            array(
                'id' => "ft_{$i}_icon",
                'label' => 'Icon',
                'type' => 'image',
                'description' => 'Keep icon image size to 180x180 pixels or 1x1 ratio'
            ),
            array(
                'id' => "ft_{$i}_title",
                'label' => 'Title',
                'type' => 'text'
            ),
            array(
                'id' => "ft_{$i}_desc",
                'label' => 'Description',
                'type' => 'text'
            )
        );

        beans_register_post_meta( $fields, array( 'post', 'group.php' ), "main-feature-{$i}", array( 'title' => "Main Feature {$i}/{$total}" ) );

    }

}

add_action( 'beans_post_image_before_markup', 'blue_group_features' );

function blue_group_features() {

    ?>
    <div class="uk-grid" data-uk-grid-margin="">
        <?php $total = 3; for ( $i = 1; $i <= $total; $i++ ) :

            $src = wp_get_attachment_url( beans_get_post_meta( "ft_{$i}_icon" ) );

            if ( !$src ) {
                $src = '/wp-content/uploads/pmo.jpg';
            }

        ?>

            <div class="uk-width-medium-1-3 uk-text-center">
                <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                    <img src="<?php echo esc_url( $src ); ?>" height="180" width="180">
                </div>
                <h2 class="uk-margin-bottom-remove"><?php echo esc_html( beans_get_post_meta( "ft_{$i}_title" ) ) ?></h2>
                <p class="uk-text-large uk-margin-top-remove uk-text-muted"><?php echo esc_html( beans_get_post_meta( "ft_{$i}_desc" ) ) ?></p>
            </div>

        <?php endfor; ?>
    </div>
    <?php

}

////////

// Load document which is always needed at the bottom of template files.
beans_load_document();