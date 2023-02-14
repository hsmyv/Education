<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class EventStoreRequest extends FormRequest
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
            'title'      => ['required'],
            'slug'     => ['required',  Rule::unique('events', 'slug')],
            'body'      => ['required'],
            'start_date' => ['required'],
            'end_date'  => ['required'],
            'ticket_price' => ['required'],
            'place'       => ['required'],
            'street' => ['required'],
            'city' => ['required'],
            'company' => ['required'],
        ];
    }
}
