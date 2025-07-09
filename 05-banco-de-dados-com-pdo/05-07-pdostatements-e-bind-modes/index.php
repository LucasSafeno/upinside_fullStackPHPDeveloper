<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.07 - PDOStatement e bind modes");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/**
 * [ prepare ] http://php.net/manual/pt_BR/pdo.prepare.php
 */
fullStackPHPClassSession("prepared statement", __LINE__);

$stmt = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 1");
$stmt->execute();

var_dump(
  $stmt,
  $stmt->rowCount(),
  $stmt->columnCount(),
  $stmt->fetchAll()
);

/*
 * [ bind value ] http://php.net/manual/pt_BR/pdostatement.bindvalue.php
 *
 */
fullStackPHPClassSession("stmt bind value", __LINE__);
$stmt = Connect::getInstance()->prepare("SELECT * FROM users WHERE id = :id");
$stmt->bindValue(":id", 50, PDO::PARAM_INT);
$stmt->execute();

var_dump(
  $stmt->fetch()
);

/*
 * [ bind param ] http://php.net/manual/pt_BR/pdostatement.bindparam.php
 */
fullStackPHPClassSession("stmt bind param", __LINE__);
$stmt = Connect::getInstance()->prepare("INSERT INTO users VALUES (first_name, last_name) VALUES (':first_name', ':last_name','')");
$firstname = 'Lucas';
$lastName = 'Tenório';

$stmt->bindParam(':first_name', $firstname);
$stmt->bindParam(':last_name', $lastName);

$stmt->execute();

var_dump(
  $stmt->fetch()
);
/*
 * [ execute ] http://php.net/manual/pt_BR/pdostatement.execute.php
 */
fullStackPHPClassSession("stmt execute array", __LINE__);
$stmt = Connect::getInstance()->prepare("INSERT INTO users VALUES (first_name, last_name) VALUES (':first_name', ':last_name','')");
$user = [
  'first_name' => 'Teste',
  'last_name' => 'Teste'
];

$stmt->execute($user);

/*
 * [ bind column ] http://php.net/manual/en/pdostatement.bindcolumn.php
 */
fullStackPHPClassSession("bind column", __LINE__);
$stmt = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 3");
$stmt->execute();
$stmt->bindColumn('first_name', $name);
$stmt->bindColumn('email', $email);

while ($user = $stmt->fetch()) {
  foreach ($stmt->fetchAll() as $user) {
    var_dump($user);
    echo "O email de {$name} é {$email}";
  }
}
