<?php

namespace Source\Contracts;

class UserAdmin extends User implements UserInterface, UserErrorInterface
{

  private $level;
  private $error;

  public function __construct($firstName, $lastName, $email)
  {
    parent::__construct($firstName, $lastName, $email);
    $this->level = 10;
  }

  /**
   * Set the value of error
   *
   * @return  self
   */
  public function setError($error)
  {
    $this->error = $error;

    return $this;
  }

  /**
   * Get the value of error
   */
  public function getError()
  {
    return $this->error;
  }
}
