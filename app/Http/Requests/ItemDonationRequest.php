<?php

namespace App\Http\Requests;

use App\Dto\ItemDonationDto;
use Illuminate\Foundation\Http\FormRequest;

class ItemDonationRequest extends FormRequest
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
                'giver_id' => 'required|numeric',
                'item_id' => 'required|numeric',
                'quantity' => 'required|numeric',
            ];
    }

    public function getDto(): ItemDonationDto
    {
        $dto = new ItemDonationDto();

        $dto->setGiverID($this->request->get('giver_id'))
            ->setItemID($this->request->get('item_id'))
            ->setQuantity($this->request->get('quantity'));

        return $dto;
    }
}
