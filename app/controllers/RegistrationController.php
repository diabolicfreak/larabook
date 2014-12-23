<?php

class RegistrationController extends \BaseController {

    /**
     * Show the form for registering user.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('registration.create');
    }

    /**
     * Create new user.
     *
     * @return Response
     */
    public function store()
    {
        return Redirect::home();
    }



}
