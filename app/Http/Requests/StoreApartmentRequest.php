<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//HLEPERS
use Illuminate\Support\Facades\Auth;

class StoreApartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
           'room' => 'required|numeric|min:1|max:100',
           'bathroom' => 'required|numeric|min:1|max:100',
           'bed' => 'required|numeric|min:1|max:100',
           'shared_bathroom' => 'nullable|boolean',
           'address' => 'required|string|max:128',
           'city' => 'nullable|string|max:128',
           'visible' => 'nullable|boolean',
           'name' => 'required|string|max:64',
           'price' => 'required|decimal:0,2|max:9999',
           'lat' => 'nullable',
           'lon' => 'nullable',
           'square_meter' => 'required|numeric|max:9999',
           'description' => 'required|string|nullable',
            'cover_img' => 'required|image|max:9999',
           'service'=>'nullable|array',
            'service.*'=>'exists:services,id',
            'xxx'=>'nullable',
            'extra_imgs'=>'nullable|array',
        ];
    }
}
