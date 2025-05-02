<?php

namespace App\Http\Requests;

use App\Dto\GiverDto;
use Illuminate\Foundation\Http\FormRequest;

class GiverRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
            'name' => 'required|min:3|max:255|string',
            'address' => 'required|min:5|max:255|string',
//            'phone' => ['required', 'regex:/^01[0-2,5]{1}[0-9]{8}$/'],
            'phone' => ['required'],
        ];
    }

    public function getDto(): GiverDto
    {
        $dto = new GiverDto();

        $dto->setName($this->request->get('name'))
            ->setAddress($this->request->get('address'))
            ->setPhone($this->request->get('phone'));

        return $dto;
    }
}
