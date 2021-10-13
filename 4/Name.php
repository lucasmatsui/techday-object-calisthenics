<?php 

class Name 
{
    private string $name;

    public function __construct(string $name)
    {
        $regex = [
            "options" => "/^[a-z ,.'-]+$/i"
        ];

        if (filter_var($name, FILTER_VALIDATE_REGEXP, $regex) === false) {
            throw new Exception("Nome invalido", 400);
        }

        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}