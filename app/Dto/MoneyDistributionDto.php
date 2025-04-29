<?php


namespace App\Dto;



class MoneyDistributionDto
{
    private $institutionID;
    private $amount;

    public function getInstitutionID()
    {
        return $this->institutionID;
    }

    public function setInstitutionID($institutionID): self
    {
        $this->institutionID = $institutionID;
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
          'institution_id' => $this->getInstitutionID(),
          'amount' => $this->getAmount()
        ];
    }

}
