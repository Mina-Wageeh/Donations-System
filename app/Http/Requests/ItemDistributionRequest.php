<?php

namespace App\Http\Requests;

use App\Dto\ItemDistributionDto;
use Illuminate\Foundation\Http\FormRequest;

class ItemDistributionRequest extends FormRequest
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
                'item_id' => 'required|numeric',
                'quantity' => 'required|min:1|numeric',
            ];
    }

    public function getDto(): ItemDistributionDto
    {
        $dto = new ItemDistributionDto();

        $dto->setInstitutionID($this->request->get('institution_id'))
            ->setItemID($this->request->get('item_id'))
            ->setQuantity($this->request->get('quantity'));

        return $dto;
    }
}
