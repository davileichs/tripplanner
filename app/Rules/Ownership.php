<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Model\Destination;

class Ownership implements Rule
{

    protected $model;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {


        $object = is_object($value) ? $value : (new $this->model)->findOrFail($value);

        return $object->user_id === auth()->id();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Error saving relation';
    }
}
