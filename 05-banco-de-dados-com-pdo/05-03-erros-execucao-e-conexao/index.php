<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.03 - Errors, conexão e execução");

/*
 * [ controle de erros ] http://php.net/manual/pt_BR/language.exceptions.php
 */
fullStackPHPClassSession("controle de erros", __LINE__);
try {
  // throw new Exception("Exception");
  throw new PDOException("PDOException");
} catch (PDOException  | ErrorException $exception) {
  var_dump($exception);
} catch (Exception $exception) {

  echo "<p class='trigger error'>{$exception->getMessage()}</p>";
} finally {
  echo "<p class='trigger accept'>Execução terminou!</p>";
}

/*
 * [ php data object ] Uma classe PDO para manipulação de banco de dados.
 * http://php.net/manual/pt_BR/class.pdo.php
 */
fullStackPHPClassSession("php data object", __LINE__);
try {
  $pdo = new PDO(
    "mysql:host=localhost;dbname=fullstackphp",
    "lucas",
    "root",
    [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]
  );

  $stmt = $pdo->query("SELECT * FROM users LIMIT 3");
  while ($users = $stmt->fetch(PDO::FETCH_ASSOC)) {
    var_dump($users);
  }
} catch (PDOException $exception) {
  var_dump($exception);
}

/*
 * [ conexão com singleton ] Conextar e obter um objeto PDO garantindo instância única.
 * http://br.phptherightway.com/pages/Design-Patterns.html
 */
fullStackPHPClassSession("conexão com singleton", __LINE__);

require __DIR__ . "/../source/autoload.php";

use \Source\Database\Connect;

$pdo1 = Connect::getInstance();
$pdo2 = Connect::getInstance();

var_dump(
  $pdo1,
  $pdo2
);
