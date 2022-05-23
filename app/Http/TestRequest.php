<?php

namespace App\Http;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    public function authorize(): bool
    {
        var_dump($this->user());

        return true;
    }
}
