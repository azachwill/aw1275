<?php

namespace MarkdownImporter\Traits;

use Illuminate\Support\Str;

trait MarkdownAuthors
{
    private string $authorCPT = 'speakers';
    private string $defaultAuthor = 'Posit Team';

    private function getDefaultWPUser(): ?int
    {
        $defaultUsername = Str::slug($this->defaultAuthor);

        return username_exists($defaultUsername)
            ?: wp_insert_user([
                'user_login' => $defaultUsername,
                'user_pass' => wp_generate_password(),
                'display_name' => $this->defaultAuthor,
            ]);
    }

    private function getSpeakerData(string $title): array
    {
        return [
            'post_content' => '',
            'post_title' => $title,
            'post_status' => 'publish',
            'post_type' => $this->authorCPT,
        ];
    }

    private function getOrCreatePostAuthors(array $authors, int $postID, ?string $authorsACFKey = null): void
    {
        $speakerIDs = [];
        $wpUser = $this->getDefaultWPUser();

        if (!count($authors)) {
            $authors[] = $this->defaultAuthor;
        }

        foreach ($authors as $author) {
            $speaker = post_exists($author, null, null, $this->authorCPT);

            if (!$speaker) {
                $speaker = wp_insert_post($this->getSpeakerData($author));
            }
            $speakerIDs[] = $speaker;
        }

        if ($authorsACFKey) update_field($authorsACFKey, $speakerIDs, $postID);
        if (is_int($wpUser)) wp_update_post(['ID' => $postID, 'post_author' => $wpUser]);
    }
}