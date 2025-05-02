<?php

namespace App\Http\Requests;

use App\Dto\MoneyDonationDto;
use Illuminate\Foundation\Http\FormRequest;

class MoneyDonationRequest extends FormRequest
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
            'amount' => 'required|min:1|numeric',
        ];
    }

    public function getDto(): MoneyDonationDto
    {
        $dto = new MoneyDonationDto();

        $dto->setGiverID($this->request->get('giver_id'))
            ->setAmount($this->request->get('amount'));

        return $dto;
    }
}
