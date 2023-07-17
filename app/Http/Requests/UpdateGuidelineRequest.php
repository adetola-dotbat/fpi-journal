<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGuidelineRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'guideline_id' => 'required',
            'file' => 'required'
        ];
    }
}
