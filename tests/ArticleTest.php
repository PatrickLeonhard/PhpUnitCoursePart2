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
        $this->assertSame($this->article->getSlug(), "");
    }
    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "hello world";
        $this->assertEquals($this->article->getSlug(), "hello_world");
    }
    public function testSlugHasWhitespaceReplacedBySingleUnderscores()
    {
        $this->article->title = "hello  world  \n  article";
        $this->assertEquals($this->article->getSlug(), "hello_world_article");
    }
    public function testSlugDoesNotStartOrEndWithUnderscores()
    {
        $this->article->title = " hello world ";
        $this->assertEquals($this->article->getSlug(), "hello_world");
    }
}