<?php

declare(strict_types=1);

namespace Tejas\CrudApi\Api\Data;

interface DataInterface
{

    /**
     * Set the id of the response.
     *  
     * @param int $id
     * @return $this
     */
    public function setId(int $id);

    /**
     * Get the id status of the response.
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Set the first_name of the response.
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName(string $firstName);

    /**
     * Get the first_name status of the response.
     *
     * @return string
     */
    public function getFirstName(): string;

    /**
     * Set the last_name of the response.
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName(string $lastName);

    /**
     * Get the last_name status of the response.
     *
     * @return string
     */
    public function getLastName(): string;

    /**
     * Set the gender of the response.
     *
     * @param string $gender
     * @return $this
     */
    public function setGender(string $gender);

    /**
     * Get the gender status of the response.
     *
     * @return string
     */
    public function getGender(): string;

    /**
     * Set the email of the response.
     *
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email);

    /**
     * Get the email status of the response.
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * Set the adress1 of the response.
     *
     * @param string $adress1
     * @return $this
     */
    public function setAdress1(string $adress1);

    /**
     * Get the adress1 status of the response.
     *
     * @return string
     */
    public function getAdress1(): string;

    /**
     * Set the adress2 of the response.
     *
     * @param $adress2
     * @return $this
     */
    public function setAdress2(string $adress2);

    /**
     * Get the adress2 status of the response.
     *
     * @return string
     */
    public function getAdress2(): string;

    /**
     * Set the city of the response.
     *
     * @param string $city
     * @return $this
     */
    public function setCity(string $city);

    /**
     * Get the city status of the response.
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * Set the state of the response.
     *
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

    /**
     * Get the state status of the response.
     *
     * @return string
     */
    public function getState(): string;

    /**
     * Set the zip_code of the response.
     *
     * @param string $zipCode
     * @return $this
     */
    public function setZipCode(string $zipCode);

    /**
     * Get the zip_code status of the response.
     *
     * @return string
     */
    public function getZipCode(): string;

    /**
     * Set the feedback of the response.
     *
     * @param string $feedback
     * @return $this
     */
    public function setFeedback(string $feedback);

    /**
     * Get the feedback status of the response.
     *
     * @return string
     */
    public function getFeedback(): string;

}
