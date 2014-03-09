<?php
class UserController extends \BaseController
{
    function create()
    {
        return View::make('user.create');
    }
}
