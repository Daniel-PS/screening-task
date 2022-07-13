<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        $user = $this->route('user');
        return $user && $this->user()->can('update', $user);
    }

    public function rules(): array
    {
        return [
            'email' => ['string', 'email', 'required'],
            'first_name' => ['string', 'required'],
            'last_name' => ['string', 'required'],
            'email' => ['string', 'email', 'required'],
            'status' => ['sometimes', 'boolean']
        ];
    }
}
