<?php


function get_wp_head_contents(): string
{
    ob_start();
    wp_head(); // Capture wp_head output to override its string values
    $wp_head = ob_get_clean();
    ob_end_clean();
    return $wp_head;
}

function get_custom_authors_from_post(): array
{
    global $post;
    return get_field('authors', $post->ID) ?: [];
}

function override_yoast_schema_graph_authors(string &$wp_head, array $authors): void
{
    $pattern = "/<script type=\"application\/ld\+json\" class=\"yoast-schema-graph\">(.*?)<\/script>/s";
    preg_match_all($pattern, $wp_head, $matches);

    if (isset($matches[1]) && is_array($matches[1]) && count($matches[1]) > 0) {
        try {
            $match = $matches[1][0];
            $graph = json_decode($match, true)['@graph'];

            $graph = array_filter($graph, function ($item) {
                return $item['@type'] !== 'Person';
            });

            foreach ($authors as $author) {
                $fields = get_fields($author->ID);
                $thumbnail = get_the_post_thumbnail_url($author->ID);

                $bio = trim($fields['bio'] ?: '');
                $bio = strip_tags($bio);
                $bio = strlen($bio) > 245 ? (substr($bio,0,245) . "...") : $bio;

                $graph[] = [
                    '@type' => 'Person',
                    'description' => $bio,
                    'name' => $author->post_title,
                    'image' => [
                        '@type' => 'ImageObject',
                        'url' => $thumbnail,
                        'inLanguage' => 'en-US',
                        'caption' => $author->post_title,
                    ]
                ];
            }
            $wp_head = preg_replace(
                $pattern,
                '<script type="application\/ld\+json" class="yoast-schema-graph">'
                . json_encode($graph)
                . '</script>',
                $wp_head
            );

        } catch (\Exception $exception) {
            // @TODO: Handle exception
        }
    }
}

function get_wp_head_with_custom_authors(): string
{
    $wp_head = get_wp_head_contents();
    $authors = get_custom_authors_from_post();

    if (count($authors)) {
        $authorTags = '';
        $authorsAsString = '';

        foreach ($authors as $index => $author) {
            if ($index > 0) $authorsAsString .= ', ';
            $authorsAsString .= "{$author->post_title}";
            $authorTags .= "<meta name=\"author\" content=\"{$author->post_title}\" />";
        }

        $twitterTag = "<meta name=\"twitter:data1\" content=\"{$authorsAsString}\" />";

        override_yoast_schema_graph_authors($wp_head, $authors);
        $wp_head = preg_replace('/<meta name="author" content="(.*)" \/>/i', $authorTags, $wp_head);
        $wp_head = preg_replace('/<meta name="twitter:data1" content="(.*)" \/>/i', $twitterTag, $wp_head);
    }

    return $wp_head;
}