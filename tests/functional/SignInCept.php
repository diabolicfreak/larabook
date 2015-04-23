<?php 
$I = new FunctionalTester($scenario);
$I->am('larabook member');
$I->wantTo('login to Larabook account');


$I->signIn();

$I->seeInCurrentUrl('/statuses');
$I->see('welcome back!');
$I->assertTrue(Auth::check());
