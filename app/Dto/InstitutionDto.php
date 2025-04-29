<?php


namespace App\Dto;


class InstitutionDto
{
    private string $name;
    private string $location;

    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }


    public function getLocation(): string
    {
        return $this->location;
    }


    public function setLocation(string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function toArray(): array
    {
        return
        [
            'name' => $this->getName(),
            'location' => $this->getLocation()
        ];
    }


}
