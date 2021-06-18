<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Services\UserServices;

class CheckIfUserHasAlreadyBuyACourse implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return UserServices::haveibuyacourse($value)==0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'თქვენ ეს კურსი უკვე ნაყიდი გაქვთ';
    }
}
