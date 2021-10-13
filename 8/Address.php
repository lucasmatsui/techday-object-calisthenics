<?php 

class Address
{
    private string $state;
    private string $number;
    private string $street;
    private string $city;
    private string $country;

    public function __construct(
        string $state, 
        string $number,
        string $street,
        string $city,
        string $country,
    ){
    
        $this->state = $state;
        $this->number = $number;
        $this->street = $street;
        $this->city = $city;
        $this->country = $country;
    }

    public function __toString(): string
    {
        return "{$this->number}, {$this->street} {$this->country} {$this->state} {$this->city}";
    }
}