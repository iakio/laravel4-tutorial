<?php
class StaticPageControllerTest extends TestCase
{
    function testHomePageShouldHaveTheContentSampleApp()
    {
        $response = $this->call('GET', 'static_page/home');
        $this->assertContains('Sample App', $response->getContent());
    }

    function testHomePageShouldHaveTheTitleHome()
    {
        $crawler = $this->client->request('GET', 'static_page/home');
        $this->assertEquals('Laravel4 Tutorial Sample App | Home', $crawler->filter('title')->text());
    }

    function testHelpPageShouldHaveTheContentHelp()
    {
        $response = $this->call('GET', 'static_page/help');
        $this->assertContains('Help', $response->getContent());
    }

    function testHelpPageShouldHaveTheTitleHelp()
    {
        $crawler = $this->client->request('GET', 'static_page/help');
        $this->assertEquals('Laravel4 Tutorial Sample App | Help', $crawler->filter('title')->text());
    }

    function testAboutPageShouldHaveTheContentAboutUs()
    {
        $response = $this->call('GET', 'static_page/about');
        $this->assertContains('About Us', $response->getContent());
    }

    function testAboutPageShouldHaveTheTitleAboutUs()
    {
        $crawler = $this->client->request('GET', 'static_page/about');
        $this->assertEquals('Laravel4 Tutorial Sample App | About', $crawler->filter('title')->text());
    }

}
