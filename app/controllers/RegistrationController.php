<?php
use Larabook\Forms\RegistrationForm;

class RegistrationController extends \BaseController {

    private $registrationForm;

    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;
    }

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
        $this->registrationForm->validate(Input::all());

        $user = User::create(
          Input::only('username', 'email', 'password')
        );

        Auth::login($user);

        return Redirect::home();
    }



}
