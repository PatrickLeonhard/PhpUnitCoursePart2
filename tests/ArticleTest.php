<?php

use App\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;
    protected function setUp(): void
    {
        $this->article = new Article();
    }
    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->title);
    }
    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertSame("", $this->article->getSlug());
    }
    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "hello world";
        $this->assertEquals("hello_world", $this->article->getSlug());
    }
    public function testSlugHasWhitespaceReplacedBySingleUnderscores()
    {
        $this->article->title = "hello  world  \n  article";
        $this->assertEquals("hello_world_article", $this->article->getSlug());
    }
    public function testSlugDoesNotStartOrEndWithUnderscores()
    {
        $this->article->title = " hello world ";
        $this->assertEquals("hello_world", $this->article->getSlug());
    }
    public function testSlugDoesNotHaveAnyNonWordCharacters()
    {
        $this->article->title = "hello world!  article!!";
        $this->assertEquals("hello_world_article", $this->article->getSlug());
    }
}