<?php
// src/KK/BlogBundle/Tests/PageControllerTest.php

namespace KK\BlogBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');

        $this->assertEquals(1, $crawler->filter('h1:contains("About Da Blog")')->count());
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        // Check there are some blog enteries on the page
//        $this->assertTrue($crawler->filter('article.blog')->count() > 0);

        $blogLink = $crawler->filter('article.blog h2 a')->first();

        $blogTitle = $blogLink->text();

        $crawler = $client->click($blogLink->link());

        // Check the h2 has the blog title in it
        $this->assertEquals(1, $crawler->filter('h2:contains("' . $blogTitle . '")')->count());
    }
}