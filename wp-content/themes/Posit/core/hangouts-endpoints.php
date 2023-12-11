<?php

function getHangoutStatus($date){

    $hangoutDate = strtotime($date);

    $hangoutLiveDuration = $hangoutDate+(60*65);

    return getHangoutAndConferenceStatus($hangoutDate, $hangoutLiveDuration);
}

function getHangouts($limit = 3, $order = 'DESC') {
    $query = new WP_Query(array_merge(
        [
            'order' => $order,
            'post_type' => 'hangouts',
            'meta_key' => 'date_and_time',
            'posts_per_page' => $limit,
            'post_status' => 'publish',
            'orderby' => 'meta_value',
        ],
    ));

    $posts = serializePosts($query);
    return $posts;
}

function getHangoutsByStatus($status = [], $numberOfHangouts) {
    $posts = [];
    $countPosts = 0;
    $query = getHangouts(-1);

    foreach ($query as $post) {
        if (in_array($post['customData']['status'], $status) && $countPosts < $numberOfHangouts) {
            $posts[] = $post;
            $countPosts++;
        }
    }

    return $posts;
}

function getUpcomingHangouts($status = [], $numberOfHangouts = 2) {
    $posts = [];
    $countPosts = 0;
    $query = getHangouts(-1);

    foreach ($query as $post) {
        if (in_array($post['customData']['status'], $status)) {
            $posts[] = $post;
            $countPosts++;
        }
    }

    $index = count($posts) > $numberOfHangouts ? count($posts) - $numberOfHangouts : 0;
    return array_reverse(array_slice($posts, $index), true);
}
