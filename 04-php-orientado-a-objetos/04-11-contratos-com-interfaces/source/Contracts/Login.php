<?php

namespace Source\Contracts;

class Login
{
  private $logged;
  /**
   * Summary of loginUser
   * @param \Source\Contracts\User $user
   * @return User|UserAdmin
   */
  public function loginUser(User $user): User
  {
    $this->logged = $user;
    return $this->logged;
  }

  /**
   * Summary of loginAdmin
   * @param \Source\Contracts\UserAdmin $user
   * @return User|UserAdmin
   */
  public function loginAdmin(UserAdmin $user): UserAdmin
  {
    $this->logged = $user;
    return $this->logged;
  }

  public function login(UserInterface $user): UserInterface
  {
    $this->logged = $user;
    return $this->logged;
  }
}
