<?php

class Client
{

    function __construct($lastName, $firstName, $age, $email)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
        $this->email = $email;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }
}
