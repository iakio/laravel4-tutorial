<?php
class StaticPageControllerTest extends TestCase
{
    /** @test */
    function visitHomePage()
    {
        return $this->client->request('GET', URL::route('root_path'));
    }

    /** @depends visitHomePage */
    function testHomePageShouldHaveTheContentSampleApp($crawler)
    {
        $this->assertContains('Sample App', $crawler->text());
    }

    /** @depends visitHomePage */
    function testHomePageShouldHaveTheBaseTitle($crawler)
    {
        $this->assertEquals(HTML::full_title(''), $crawler->filter('title')->text());
    }

    /** @depends visitHomePage */
    function testHomePageShouldNotHaveACustomPageTitle($crawler)
    {
        $this->assertThat(
            $crawler->filter('title')->text(),
            $this->logicalNot($this->stringContains('| Home'))
        );
    }

    /** @test */
    function visitHelpPage()
    {
        return $this->client->request('GET', URL::route('help_path'));
    }

    /** @depends visitHelpPage */
    function testHelpPageShouldHaveTheContentHelp($crawler)
    {
        $this->assertContains('Help', $crawler->text());
    }

    /** @depends visitHelpPage */
    function testHelpPageShouldHaveTheTitleHelp($crawler)
    {
        $this->assertEquals(HTML::full_title('Help'), $crawler->filter('title')->text());
    }

    /** @test */
    function visitAboutPage()
    {
        return $this->client->request('GET', URL::route('about_path'));
    }

    /** @depends visitAboutPage */
    function testAboutPageShouldHaveTheContentAboutUs($crawler)
    {
        $this->assertContains('About Us', $crawler->text());
    }

    /** @depends visitAboutPage */
    function testAboutPageShouldHaveTheTitleAboutUs($crawler)
    {
        $this->assertEquals(HTML::full_title('About'), $crawler->filter('title')->text());
    }

    /** @test */
    function visitContactPage()
    {
        return $this->client->request('GET', URL::route('contact_path'));
    }

    /** @depends visitContactPage */
    function testContactPageShouldHaveTheContentContact($crawler)
    {
        $this->assertContains('Contact', $crawler->text());
    }

    /** @depends visitContactPage */
    function testContactPageShouldHaveTheTitleContact($crawler)
    {
        $this->assertEquals(HTML::full_title('Contact'), $crawler->filter('title')->text());
    }
}
