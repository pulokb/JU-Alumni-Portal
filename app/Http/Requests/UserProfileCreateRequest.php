<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileCreateRequest extends FormRequest
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
            'department' => ['required', 'string', 'max:191'],
            'faculty' => ['required', 'string', 'max:191'],
            'batch' => ['required', 'string', 'max:191'],
            'student_id' => ['required', 'string', 'max:191'],
            'phone' => ['required', 'string', 'max:191'],
            'address' => ['required', 'string', 'max:191'],
            'facebook' => ['nullable', 'string', 'max:191'],
            'linkedin' => ['nullable', 'string', 'max:191'],
            'job_type' => ['required', 'string', 'max:191'],
            'job_details' => ['required', 'string', 'max:191'],
            'student_type' => ['required', 'string', 'max:191'],
            'file' => ['nullable', 'mimes:pdf,jpg,jpeg,png,doc,docx', 'max:10000'],
            'image' => ['required', 'image', 'max:10000'],
        ];
    }
}
