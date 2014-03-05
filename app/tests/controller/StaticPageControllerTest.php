<?php
class StaticPageControllerTest extends TestCase
{
    function testHomePageShouldHaveTheContentSampleApp()
    {
        $response = $this->call('GET', 'static_page/home');
        $this->assertContains('Sample App', $response->getContent());
    }

    function testHomePageShouldHaveTheBaseTitle()
    {
        $crawler = $this->client->request('GET', 'static_page/home');
        $this->assertEquals('Laravel4 Tutorial Sample App', $crawler->filter('title')->text());
    }

    function testHomePageShouldNotHaveACustomPageTitle()
    {
        $crawler = $this->client->request('GET', 'static_page/home');
        $this->assertThat(
            $crawler->filter('title')->text(),
            $this->logicalNot($this->stringContains('| Home'))
        );
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

    function testContactPageShouldHaveTheContentContact()
    {
        $response = $this->call('GET', 'static_page/contact');
        $this->assertContains('Contact', $response->getContent());
    }

    function testContactPageShouldHaveTheTitleContact()
    {
        $crawler = $this->client->request('GET', 'static_page/contact');
        $this->assertEquals('Laravel4 Tutorial Sample App | Contact', $crawler->filter('title')->text());
    }
}
