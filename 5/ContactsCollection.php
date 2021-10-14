<?php

class ContactsCollection
{
    const MAX_CONTACTS_LIMIT = 1000;

    private array $contacts;

    public function add($contact): void
    {
        if ($this->isContactLimit()) {
            throw new Exception("Você atingiu o número máximo de contatos", 400);
        }

        array_push($this->contacts, $contact);
    }

    public function count(): int
    {
        return count($this->contacts);
    }

    public function remove(int $contactId): void
    {
        if (!$this->contains($contactId)) {
            throw new Exception("Contato não existe", 404);
        }

        unset($this->contacts[$contactId]);
    }

    public function contains(int $value)
    {
        if (in_array($value, $this->contacts)) {
            return true;
        }
        
        return false;
    }

    private function isContactLimit(): bool
    {
        if ($this->count() > self::MAX_CONTACTS_LIMIT) {
            return true;
        }

        return false;
    }

}