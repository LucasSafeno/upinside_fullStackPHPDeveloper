<?php

namespace Source\Database;

use \PDO;
use \PDOException;

class Connect
{
  private const HOST = "localhost";
  private const USER = "safeno";
  private const DBNAME = "fsphp";
  private const PASSWD = "";

  private const OPTIONS = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
  ];


  private static $instance;
  /**
   * Get the value of instance
   * @return PDO
   */
  public static function getInstance(): PDO
  {
    if (empty(self::$instance)) {
      try {
        self::$instance = new PDO(
          "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME,
          self::USER,
          self::PASSWD,
          self::OPTIONS
        );
      } catch (PDOException $e) {
        die("<h1> WHOOPS, erro ao conectar...</h1>");
      }
    }
    return self::$instance;
  }
  private function __construct() {} //? __construct

  private function __clone() {} //? __clone


}
