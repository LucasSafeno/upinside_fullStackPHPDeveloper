<?php

namespace Source\Interpretation;

class User
{
  private $firstName;
  private $lastName;
  private $email;

  public function __construct($firstName, $lastName, $email)
  {
    $this->firstName  = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
  }

  /**
   * Get the value of firstName
   */
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
   * Get the value of lastName
   */
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of firstName
   *
   * @return  self
   */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;

    return $this;
  }

  /**
   * Set the value of lastName
   *
   * @return  self
   */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }
}
