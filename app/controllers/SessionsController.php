<?php

use Larabook\Forms\SignInForm;

class SessionsController extends \BaseController
{

    /**
     * @var SignInForm
     */
    private $signInForm;

    function __construct(SignInForm $signInForm)
    {
        $this->signInForm = $signInForm;

        $this->beforeFilter('guest', ['except' => 'destroy']);
    }


    /**
     * Show the form for login.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('sessions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $formdata = Input::only('email', 'password');
        //Validate form
        $this->signInForm->validate($formdata);

        if(Auth::attempt($formdata))
        {
            Flash::message('Welcome back');
            return Redirect::intended('statuses');
        }
        //Fetch form Input
        //Fetch form Input
    }

    /**
     * Log a user out of larabook
     *
     * @return mixed
     */
    public function destroy()
    {
        Auth::logout();

        Flash::message('You have now been logged out');
        return Redirect::home();
    }

}