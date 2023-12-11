<?php

function cc_mime_types($mimes) {
    $mimes['json'] = 'application/json';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');