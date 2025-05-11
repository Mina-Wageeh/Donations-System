<?php


namespace App\Dto;



class ItemDonationDto
{
    private $giverID;
    private $itemID;
    private $quantity;

    public function getGiverID()
    {
        return $this->giverID;
    }

    public function setGiverID($giverID): self
    {
        $this->giverID = $giverID;
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
          'giver_id' => $this->getGiverID(),
          'item_id' => $this->getItemID(),
          'quantity' => $this->getQuantity()
        ];
    }
}
