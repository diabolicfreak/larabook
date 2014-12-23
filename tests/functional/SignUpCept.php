<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('perform actions and see result');

$I->am('a gueest');
$I->wantTo('Sign up for a larabook account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'JohnDoe');
$I->fillField('Email:', 'john@example.com');
$I->fillField('Password:', 'demo');
$I->fillField('Password Confirmation:', 'demo');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to larabook');
$I->seeRecord('users', [
    'username' =>'JohnDoe'
]);