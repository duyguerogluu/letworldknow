<?php

namespace Modules\Dashboard\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'=>'nullable|numeric',
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'phone_1'=> 'required|string',
            'phone_2'=> 'nullable|string',
            'profile_id'=>'nullable|numeric',
            'photo'=>'nullable|string',
            'gender'=> 'required|string',
            'user_id'=>'required|numeric'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
