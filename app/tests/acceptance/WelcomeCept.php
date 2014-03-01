<?php
$I = new WebGuy($scenario);
$I->wantTo('Check the home page for welcome message');
$I->amOnPage('/');
$I->see('Welcome');
