<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class TicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        return [
            'flight_id' => 'required|exists:flights,id',
            'ticket_number' => 'required|regex:/^[A-Z0-9-]+$/|unique:tickets',
            'passenger_name' => 'required|string|max:64',
            'boarding_gate' => 'required|string|max:64',
            'class' => 'required|string',
            'boarding_time'=> 'required|date_format:Y-m-d H:i:s',
        ];
    }
}
