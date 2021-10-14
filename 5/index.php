<?php

class Consumer
{
    const MAX_CONTACTS_LIMIT = 1000;

    private string $name;
    private array $contacts;

    public function addContact($contact): void
    {
        if (count($this->contacts) > self::MAX_CONTACTS_LIMIT) {
            throw new Exception("Você atingiu o número máximo de contatos", 400);
        }
        

        array_push($this->contacts, $contact);
    }

    public function removeContact($contactId): void
    {
        if (!in_array($contactId, $this->contacts)) {
            throw new Exception("Contato não existe");
        }

        unset($this->contacts[$contactId]);
    }
}