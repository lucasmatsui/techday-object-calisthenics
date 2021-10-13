<?php

class Consumer
{
    private string $name;
    private string $email;
    private string $password;
    private string $amountInWallet;
    private int $age;

    public function __construct($name, $email, $age)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new Exception("Email invalido", 400);
        }

        $regex = [
            "options" => "/^[a-z ,.'-]+$/i"
        ];

        if (filter_var($name, FILTER_VALIDATE_REGEXP, $regex) === false) {
            throw new Exception("Nome invalido", 400);
        }

        if ($age < 16) {
            throw new Exception("Usuario menor de 16 anos", 400);
        }

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