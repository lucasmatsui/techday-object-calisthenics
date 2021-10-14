<?php

class Consumer
{
    private string $name;
    private ContactsCollection $contacts;

    public function addContact($contact): void
    {
        $this->contacts->add($contact);
    }

    public function removeContact($contactId): void
    {
        $this->contacts->remove($contactId);
    }
}