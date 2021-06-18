<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Courses;
class CheckIfCourseExsists implements Rule
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
        return Courses::where("id",$value)->count()==1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'ეს კურსი არ არსებობს.';
    }
}
