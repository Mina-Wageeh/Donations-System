<?php

namespace App\Http\Requests;

use App\Dto\InstitutionDto;
use Illuminate\Foundation\Http\FormRequest;

class InstitutionRequest extends FormRequest
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
            'location' => 'required|min:5|max:255|string',
        ];
    }

    public function getDto(): InstitutionDto
    {
        $dto = new InstitutionDto();

        $dto->setName($this->request->get('name'))
            ->setLocation($this->request->get('location'));

        return $dto;
    }
}
