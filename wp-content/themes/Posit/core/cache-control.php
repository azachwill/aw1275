<?php 

function process_header_nocache() {
    $regex_path_patterns = [
        '#^/download/rstudio-desktop/?#',
        '#^/download/rstudio-desktop-pro/?#',
    ];
  
    // Loop through the patterns.
    foreach ( $regex_path_patterns as $regex_path_pattern ) {
        if ( preg_match($regex_path_pattern, $_SERVER['REQUEST_URI']) ) {
            add_action( 'send_headers', function() {
                header( 'Cache-Control: no-cache, must-revalidate, max-age=0' );
            }, 15 );
            
            // No need to continue the loop once there's a match.
            break;
        }
    }
}
add_action( 'init', 'process_header_nocache', 15 );