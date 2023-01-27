<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Ownership;
use App\Models\Destination;


class StoreCityRequest extends FormRequest
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
            'destination_id' => ['required', new Ownership(Destination::class)]
        ];
    }


    /**
     * Modify the message return
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'date_ini.required' => 'A initial date is required',
            'date_ini.date' => 'Date in wrong format',
            'date_end.required' => 'A end date is required',
            'date_end.date' => 'Date in wrong format',
        ];
    }

}
