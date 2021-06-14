<?php

/**
 ** My custom Gutenberg functions
 */


function psd2css_gutenberg_block_item() {
    wp_register_script('custom-js', get_template_directory_uri() . '/build/index.js', array( 'wp-blocks', 'wp-editor', 'wp-components'));
    register_block_type('psd2css/custom-block-item', array(
        'editor_script' => 'custom-js'
    ));
}
add_action('init', 'psd2css_gutenberg_block_item');

function wpdocs_allowed_block_types( $allowed_block_types, $post ) {
    if ( $post->post_type !== 'post' ) {
        return $allowed_block_types;
    }

    return array( 'psd2css/custom-block-item' );
}

add_filter( 'allowed_block_types', 'wpdocs_allowed_block_types', 10, 2 );
