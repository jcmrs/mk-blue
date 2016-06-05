<?php

// Remove some post components.
beans_remove_action( 'beans_post_meta' );
beans_remove_action( 'beans_post_meta_tags' );
beans_remove_action( 'beans_post_meta_categories' );
beans_remove_action( 'beans_post_image' );

// Trim the content.
add_filter( 'the_content', 'mk_archive_post_excerpt' );

function mk_archive_post_excerpt( $content ) {

    return wp_trim_words( $content, 155, '...' );

}

// Always add this function at the bottom of template file.
beans_load_document();