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
}
