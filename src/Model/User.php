<?php

class User
{
    private int $id;
    private string $lastName;
    private string $firstName;
    private int $age;
    private string $email;

    public function __construct(string $lastName, string $firstName, int $age, string $email)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setLastName(string $lastName): string
    {
        return $this->lastName = $lastName;
    }

    public function setFirstName(string $firstName): string
    {
        return $this->firstName = $firstName;
    }

    public function setAge(int $age): int
    {
        return $this->age = $age;
    }

    public function setEmail(string $email): string
    {
        return $this->email = $email;
    }
}
