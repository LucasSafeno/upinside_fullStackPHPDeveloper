<?php

namespace Source\Models;

use PDOException;

abstract class Model
{
  /** @var  object|null  */
  protected $data;
  /** @var \PDOException|null */
  protected $fail;

  /** @var  string|null */
  protected $message;

  /**
   * Get the value of data
   */
  public function data()
  {
    return $this->data;
  }

  /**
   * Get the value of fail
   */
  public function fail()
  {
    return $this->fail;
  }

  /**
   * Get the value of message
   */
  public function message()
  {
    return $this->message;
  }

  protected function create() {}

  protected function read() {}

  protected function update() {}
  protected function delete() {}

  protected function safe(): ?array {}

  private function filter() {}
}
