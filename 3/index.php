<?php

class Consumer
{
    private string $name;
    private string $email;
    private string $password;
    private string $city;
    private string $zip;
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

    public function getAge()
    {
        return $this->age;
    }
}

$consumer = new Consumer();
if ($consumer->getAge() < 16) {
    throw new Exception("Usuario menor de 16 anos", 400);
} 

return 'OK';