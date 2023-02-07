<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQosidahDetailRequest extends FormRequest
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
            'qosidah_id' => ['required'],
            'line' => ['required', 'integer'],
            'lyric' => ['required', 'string', 'max:255'],
            'lyric_latin' => ['string', 'max:255'],
            'lyric_translate' => ['string', 'max:255'],
        ];
    }
}
