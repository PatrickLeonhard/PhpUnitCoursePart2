<?php

namespace App;

class Article
{
    public ?string $title = null;

    public function getSlug(){
        $slug = $this->title;
        $slug = trim(preg_replace('/\s+/', '_', $slug), "_");
        return $slug;
    }
}