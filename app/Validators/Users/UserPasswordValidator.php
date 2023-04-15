<?php

namespace App\Validators\Users;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators\Users;
 */
class UserPasswordValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'password' => 'required|min:6|confirmed'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'password' => 'required|min:6|confirmed',
        ],
    ];
}
