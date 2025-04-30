<?php


namespace App\Dto;



class ItemDistributionDto
{
    private $institutionID;
    private $itemID;
    private $quantity;


    public function getInstitutionID()
    {
        return $this->institutionID;
    }


    public function setInstitutionID($institutionID): self
    {
        $this->institutionID = $institutionID;
        return $this;
    }


    public function getItemID()
    {
        return $this->itemID;
    }


    public function setItemID($itemID): self
    {
        $this->itemID = $itemID;
        return $this;
    }


    public function getQuantity()
    {
        return $this->quantity;
    }


    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }


    public function toArray(): array
    {
        return
        [
            'institution_id' => $this->getInstitutionID(),
            'item_id' => $this->getItemID(),
            'quantity' => $this->getQuantity()
        ];
    }


}
