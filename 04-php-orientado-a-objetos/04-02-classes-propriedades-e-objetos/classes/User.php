<?php

class User
{
  public $firstName;
  public $lastName;
  public $email;

  /**
   * @return string
   */
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
   * @param string $firstName
   * @return static
   */
  public function setFirstName($firstName)
  {
    $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);

    return $this;
  }

  /**
   *
   * @return string
   */
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   *
   * @param string $lastName
   * @return static
   */
  public function setLastName($lastName)
  {
    $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);

    return $this;
  }

  /**
   * Retorna o email
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Formata o email em um formato válido.
   * @param string $email
   * @return bool
   */
  public function setEmail($email)
  {
    $this->email = $email;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }
}
