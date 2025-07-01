<?php

namespace Source\Qualifield;

class User
{
  private $firstName;
  private $lastName;
  private $email;


  private $error;

  public function setUser($firstName, $lastName, $email)
  {
    $this->setFirstName($firstName);
    $this->setLastName($lastName);

    if (!$this->setEmail($email)) {
      $this->error = "O email {$this->getEmail()} não é válido";
      return false;
    }

    return true;
  }

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
  private function setFirstName($firstName)
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
  private function setLastName($lastName)
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
  private function setEmail($email)
  {
    $this->email = $email;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }

  /**
   * Get the value of error
   */
  public function getError()
  {
    return $this->error;
  }
}
