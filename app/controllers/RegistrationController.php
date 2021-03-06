<?php
use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Larabook\core\CommandBus;

class RegistrationController extends \BaseController {

    use CommandBus;

    /**
     * @var RegistrationForm
     */
    private $registrationForm;

    /**
     * @param CommandBus $commandBus
     * @param RegistrationForm $registrationForm
     */
    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;

        $this->beforeFilter('guest');
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

        extract(Input::only('username', 'email', 'password'));

        $user = $this->execute(
            new RegisterUserCommand($username, $email, $password)
        );


        Auth::login($user);

        Flash::overlay('We are glad to have you', 'Welcome');

        return Redirect::home();
    }



}
