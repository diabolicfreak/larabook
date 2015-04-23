<?php namespace Larabook\Forms;
use Laracasts\Validation\FormValidator;



class PublishStatusForm extends FormValidator {

    /**
     * Validation rules for the PostStatus form
     * @var array
     */

    protected $rules = [
        'body' => 'required'
    ];
}