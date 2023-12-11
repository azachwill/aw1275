<?php

$post_hangouts = 'hangouts';

// Register the columns.
add_filter( "manage_{$post_hangouts}_posts_columns", function ( $defaults ) {
	
    unset($defaults['lh_archive_post_status-post_expires']);

	$defaults['hangout-speakers'] = 'Speakers';

	return $defaults;
} );

// Handle the value for each of the new columns.
add_action( "manage_{$post_hangouts}_posts_custom_column", function ( $column_name, $post_id ) {
	
    $serializeHangout = serializePost(get_post());
    $hangoutData = $serializeHangout['customData'];
    $primarySpeaker = serializePost($hangoutData['primary_speaker']);

	if ( $column_name == 'hangout-speakers' ) {
		echo $primarySpeaker['title'];
	}
	
}, 10, 2 );


$post_cheatsheets = 'cheatsheets';



