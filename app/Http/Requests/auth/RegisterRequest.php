<?php

namespace App\Http\Requests\auth;

use App\Helpers\ResponseBuilder;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'name'=>'required|string',
            'mobile'=>'required|min:8|max:10|unique:users,mobile',
            'password'=>'required|confirmed'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(ResponseBuilder::error($validator->errors()->first(),400));
    }
}
