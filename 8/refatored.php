<?php

class Consumer
{
    private FullName $fullName;
    private string $email;
    private string $password;
    private Address $address;
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
