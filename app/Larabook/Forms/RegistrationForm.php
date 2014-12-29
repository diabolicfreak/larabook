<?php namespace Larabook\Forms;
use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: diabolicfeak
 * Date: 12/24/2014
 * Time: 5:44 PM
 */

class RegistrationForm extends FormValidator {

    /**
     * Validation rules for the registration form
     * @var array
     */

    protected $rules = [
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ];
}