<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
 use App\Rules\CheckIfCourseExsists; 
 use App\Rules\CheckIfUserHasAlreadyBuyACourse; 
 use App\Rules\CheckIfUserHaveEnoughMoney; 
class BuyCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "course_id"=>["required", "integer", new CheckIfCourseExsists, new CheckIfUserHaveEnoughMoney, new CheckIfUserHasAlreadyBuyACourse]
        ];
    }
}
