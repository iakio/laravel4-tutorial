<?php
class UserControllerTest extends TestCase
{
    function testSignupPageHaveContent()
    {
        $response = $this->call('GET', URL::route('signup_path'));
        $this->assertContains('Sign up', $response->getContent());
    }

    function testSignupPageTitle()
    {
        $clawer = $this->client->request('GET', URL::route('signup_path'));
        $this->assertEquals(HTML::full_title('Sign up'), $clawer->filter('title')->text());
    }
}
