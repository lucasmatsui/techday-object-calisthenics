<?php

class Consumer
{
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private string $state;
    private string $number;
    private string $street;
    private string $city;
    private string $country;
    private string $amountInWallet;
    private string $age;

    public function deposit(float $value)
    {
        return $this->amountInWallet += $value;
    }

    public function withdraw(float $value)
    {
        return $this->amountInWallet -= $value;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function isLegalAge()
    {
        if ($this->age > 16) {
            return true;
        }

        return false;

    }

}
