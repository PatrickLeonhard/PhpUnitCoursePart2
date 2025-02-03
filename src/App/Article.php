<?php

namespace App;

class Article
{
    public ?string $title = null;

    public function getSlug(){
        $slug = $this->title;
        $slug = str_replace(' ', '_', $slug);
        return $slug;
    }
}