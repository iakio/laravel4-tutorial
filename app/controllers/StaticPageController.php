<?php
class StaticPageController extends \BaseController
{
    function home()
    {
        return View::make('static_page.home');
    }

    function help()
    {
        return View::make('static_page.help');
    }

    function about()
    {
        return View::make('static_page.about');
    }

    function contact()
    {
        return View::make('static_page.contact');
    }
}
