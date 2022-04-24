<?php

namespace Modules\Dashboard\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'member_id' => 'required|numeric',
            'cover_photo' => 'nullable|string', //@todo fotolar için required ayarlanacak. tüm medya elemanları için aslında
            'is_open_relation' => 'nullable|boolean',
            'relation_status' => 'nullable|string',
            'about' => 'nullable|string',
            'philosophy' => 'nullable|string',
            'feith' => 'nullable|string',
            'current_country' => 'nullable|numeric',
            'current_province' => 'nullable|numeric',
            'job' => 'nullable|string',
            'job_sector' => 'nullable|string',
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
