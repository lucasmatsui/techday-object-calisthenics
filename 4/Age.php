<?php 

class Age 
{
    private int $age;

    public function __construct(int $age)
    {
        if ($age < 16) {
            throw new Exception("Usuario menor de 16 anos", 400);
        }

        $this->age = $age;
    }

    public function __toString(): string
    {
        return $this->age;
    }
}