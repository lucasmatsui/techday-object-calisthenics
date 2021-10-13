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

    public function isLegalAge()
    {
        if ($this->age > 16) {
            return true;
        }

        return false;

    }

}

$consumer = new Consumer();
if (!$consumer->isLegalAge()) {
    throw new Exception("Usuario menor de 16 anos", 400);
} 

return 'OK';
