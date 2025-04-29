<?php


namespace App\Dto;



class MoneyDonationDto
{
    private $amount;


    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount): self
    {
        $this->amount = $amount;

        return $this;
    }



}
