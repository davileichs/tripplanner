<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Ownership;
use App\Models\Destination;

class StoreCostRequest extends FormRequest
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
            'name' => 'required|max:50',
            'price' => 'required',
            'type' => 'required',
            'city_id' => 'required',
            'cost_tab_id' => 'required',
            'destination_id' => ['required', new Ownership(Destination::class)]
        ];
    }
}
