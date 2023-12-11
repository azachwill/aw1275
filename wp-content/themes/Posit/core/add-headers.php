<?php
/*
add security headers.
*/

function security_headers( $headers ) {
    $headers['X-Content-Type-Options'] = 'nosniff';
    $headers['X-Frame-Options'] = 'SAMEORIGIN';
    return $headers;
}

add_filter( 'wp_headers', 'security_headers' );
