<?php

namespace App;

class Article
{
    public ?string $title = null;

    public function getSlug(){
        $slug = $this->title;

        $slug = preg_replace('/\s+/', '_', $slug);

        $slug = preg_replace('/[^\w]+/', '', $slug);

        $slug = trim($slug, '_');

        return $slug;
    }
}