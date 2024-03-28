<?php

declare(strict_types=1);

namespace Tejas\CrudApi\Model\Response;

use Tejas\CrudApi\Api\Data\DataInterface;

class DataResponse implements DataInterface
{

    protected $id;

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    protected $firstName;

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    protected $lastName;

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    protected $gender;

    public function setGender(string $gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    protected $email;

    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    protected $adress1;

    public function setAdress1(string $adress1)
    {
        $this->adress1 = $adress1;
        return $this;
    }

    public function getAdress1(): string
    {
        return $this->adress1;
    }

    protected $adress2;

    public function setAdress2(string $adress2)
    {
        $this->adress2 = $adress2;
        return $this;
    }

    public function getAdress2(): string
    {
        return $this->adress2;
    }

    protected $city;

    public function setCity(string $city)
    {
        $this->city = $city;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    protected $state;

    public function setState(string $state)
    {
        $this->state = $state;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }
    protected $zipCode;

    public function setZipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }
    
    protected $feedback;

    public function setFeedback(string $feedback)
    {
        $this->feedback = $feedback;
        return $this;
    }

    public function getFeedback(): string
    {
        return $this->feedback;
    }

}
