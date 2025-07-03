<?php

namespace Source\Traits;

trait AddressTrait
{
  private $address;

  /**
   * Get the value of address
   * @return Address
   */
  public function getAddress(): Address
  {
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */
  public function setAddress(Address $address)
  {
    $this->address = $address;

    return $this;
  }
}
