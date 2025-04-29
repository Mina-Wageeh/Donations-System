<?php

namespace App\Http\Requests;

use App\Dto\MoneyDistributionDto;
use Illuminate\Foundation\Http\FormRequest;

class MoneyDistributionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return
        [
            'institution_id' => 'required|numeric',
            'amount' => 'required|min:1|numeric',
        ];
    }

    public function getDto(): MoneyDistributionDto
    {
        $dto = new MoneyDistributionDto();

        $dto
            ->setInstitutionID($this->request->get('institution_id'))
            ->setAmount($this->request->get('amount'))
        ;

        return $dto;
    }
}
