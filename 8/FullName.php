<?php 

class FullName 
{
    private string $firtName;
    private string $lastName;

    public function __construct(string $firtName, string $lastName)
    {
    
        $this->firtName = $firtName;
        $this->lastName = $lastName;
    }

    public function __toString(): string
    {
        return "{$this->firtName} {$this->lastName}";
    }
}