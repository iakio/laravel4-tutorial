<?php
class StaticPageControllerTest extends TestCase
{
    function testHomePageShouldHaveTheContentSampleApp()
    {
        $response = $this->route('GET', 'root_path');
        $this->assertContains('Sample App', $response->getContent());
    }

    function testHomePageShouldHaveTheBaseTitle()
    {
        $crawler = $this->client->request('GET', URL::route('root_path'));
        $this->assertEquals('Laravel4 Tutorial Sample App', $crawler->filter('title')->text());
    }

    function testHomePageShouldNotHaveACustomPageTitle()
    {
        $crawler = $this->client->request('GET', URL::route('root_path'));
        $this->assertThat(
            $crawler->filter('title')->text(),
            $this->logicalNot($this->stringContains('| Home'))
        );
    }

    function testHelpPageShouldHaveTheContentHelp()
    {
        $response = $this->route('GET', 'help_path');
        $this->assertContains('Help', $response->getContent());
    }

    function testHelpPageShouldHaveTheTitleHelp()
    {
        $crawler = $this->client->request('GET', URL::route('help_path'));
        $this->assertEquals('Laravel4 Tutorial Sample App | Help', $crawler->filter('title')->text());
    }

    function testAboutPageShouldHaveTheContentAboutUs()
    {
        $response = $this->route('GET', 'about_path');
        $this->assertContains('About Us', $response->getContent());
    }

    function testAboutPageShouldHaveTheTitleAboutUs()
    {
        $crawler = $this->client->request('GET', URL::route('about_path'));
        $this->assertEquals('Laravel4 Tutorial Sample App | About', $crawler->filter('title')->text());
    }

    function testContactPageShouldHaveTheContentContact()
    {
        $response = $this->route('GET', 'contact_path');
        $this->assertContains('Contact', $response->getContent());
    }

    function testContactPageShouldHaveTheTitleContact()
    {
        $crawler = $this->client->request('GET', URL::route('contact_path'));
        $this->assertEquals('Laravel4 Tutorial Sample App | Contact', $crawler->filter('title')->text());
    }
}
