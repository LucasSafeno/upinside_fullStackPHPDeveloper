<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.04 - Consultas com query e exec");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/*
 * [ insert ] Cadastrar dados.
 * https://mariadb.com/kb/en/library/insert/
 *
 * [ PDO exec ] http://php.net/manual/pt_BR/pdo.exec.php
 * [ PDO query ]http://php.net/manual/pt_BR/pdo.query.php
 */

fullStackPHPClassSession("insert", __LINE__);
$insert = "
  INSERT INTO users(first_name, last_name, email, document)
  VALUES ('Lucas', 'Tenório', 'lucas@email.com.br', '23415573');
";

try {
  // $exec = Connect::getInstance()->exec($insert);
  // var_dump(Connect::getInstance()->lastInsertId());
  $exec = null;

  $query = Connect::getInstance()->query($insert);
  var_dump(Connect::getInstance()->lastInsertId());

  var_dump(
    $exec,
    $query->errorInfo()
  );
} catch (PDOException $e) {
  var_dump($e);
}

/*
 * [ select ] Ler/Consultar dados.
 * https://mariadb.com/kb/en/library/select/
 */
fullStackPHPClassSession("select", __LINE__);
try {

  $query = Connect::getInstance()->query("SELECT * FROM users LIMIT 3");
  var_dump(
    [
      $query,
      $query->rowCount(),
      $query->fetchAll()
    ]
  );
} catch (PDOException $e) {
  var_dump($e);
}

/*
 * [ update ] Atualizar dados.
 * https://mariadb.com/kb/en/library/update/
 */
fullStackPHPClassSession("update", __LINE__);
try {
  $exec = Connect::getInstance()->exec("UPDATE users SET first_name = 'teste', last_name = 'teste'  WHERE id = '57' ");

  var_dump($exec);
} catch (PDOException $e) {
  var_dump($e);
}

/*
 * [ delete ] Deletar dados.
 * https://mariadb.com/kb/en/library/delete/
 */
fullStackPHPClassSession("delete", __LINE__);
try {
  $exec = Connect::getInstance()->exec("DELETE FROM users WHERE id > 50");

  var_dump($exec);
} catch (PDOException $e) {
  var_dump($e);
}
