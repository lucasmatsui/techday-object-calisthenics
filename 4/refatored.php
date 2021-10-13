<?php

class Consumer
{
    private Name $name;
    private Email $email;
    private Age $age;
    private string $password;
    private string $amountInWallet;

    public function __construct($name, $email, $age)
    {  
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

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

$consumer = new Consumer(
    'Lucas',
    'lucas-matsui@hotmail.com',
    20
);