<?php namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{

    public function signIn()
    {
        $email = 'foo@example.com';
        $password = 'foo';

        $this->haveAnAccount(compact('email', 'password'));

        $I = $this->getModule('laravel4');


        $I->amOnPage('/login');
        $I->fillField('email', $email);
        $I->fillField('password', $password);
        $I->click('Sign In');
    }

    public function haveAnAccount($overides = [])
    {
        return $this->have('Larabook\Users\User', $overides);
    }

    public function postAStatus($body)
    {
        $I = $this->getModule('laravel4');

        $I->fillField('Status:', $body);
        $I->click('Post Status');

    }

    public function have($model, $overrides = []){
        return TestDummy::create($model, $overrides);
    }
}
