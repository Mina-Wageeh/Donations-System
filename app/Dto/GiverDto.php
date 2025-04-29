<?php


namespace App\Dto;


class GiverDto
{
    private string $name;
    private string $address;
    private string $phone;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }


    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }


    public function getPhone(): string
    {
        return $this->phone;
    }


    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function toArray(): array
    {
        return
        [
            'name' => $this->getName(),
            'phone' => $this->getPhone(),
            'address' => $this->getAddress(),
        ];
    }
}
