<?php

class Consumer
{
    private string $name;
    private string $email;
    private string $password;
    private string $city;
    private string $zip;
    private string $amountInWallet;
    private int $age;

    public function deposit(float $value)
    {
        return $this->amountInWallet += $value;
    }

    public function getAmountInWallet()
    {
        return $this->amountInWallet;
    }

    public function withdraw(float $value)
    {
        return $this->amountInWallet -= $value;
    }
}

$consumer = new Consumer();
if ($consumer->getAmountInWallet() > 10000) {
    throw new Exception("Saldo excede R$10.000, termine a validação da sua conta", 400);
} 

return 'OK';