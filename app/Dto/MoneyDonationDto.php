<?php


namespace App\Dto;



class MoneyDonationDto
{

    private $giverID;
    private $amount;

    public function getGiverID()
    {
        return $this->giverID;
    }

    public function setGiverID($giverID): self
    {
        $this->giverID = $giverID;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function toArray(): array
    {
        return
        [
            'giver_id' => $this->getGiverID(),
            'amount' => $this->getAmount(),
        ];
    }



}
