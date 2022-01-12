<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'fullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'whatsappNumber' => ['required', 'string', 'min:11', 'max:255', 'unique:users'],
            'lineID' => ['required', 'string', 'max:255', 'unique:users'],
            'githubGitlabID' => ['required', 'string', 'max:255'],
            'birthPlace' => ['required', 'string', 'max:255'],
            'dayBirthDate' => ['required', 'string', 'max:255'],
            'monthBirthDate' => ['required', 'string', 'max:255'],
            'yearBirthDate' => ['required', 'string', 'max:255'],
            'CV' => ['required', 'mimes:jpg,png,jpeg,pdf'],
            // 'flazzCard' => ['required', 'mimes:jpg,png,jpeg,pdf'],
            'IDCard' => ['required', 'mimes:jpg,png,jpeg,pdf'],
        ];
    }
}
