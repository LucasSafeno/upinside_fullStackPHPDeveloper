<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.06 - Desmistificando transações");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/*
 * [ transaction ] https://pt.wikipedia.org/wiki/Transa%C3%A7%C3%A3o_em_base_de_dados
 *
 * [ Atomicidade ] Resumo: Todas as ações que compõem a unidade de trabalho da transação
 * devem ser concluídas com sucesso, para que seja efetivada.
 *
 * [ Consistência ] Resumo: Todas as regras e restrições definidas no banco de dados devem
 * ser obedecidas. (relacionamentos, tipos, restrições, etc.)
 *
 * [ Isolamento ] Resumo: Cada transação funciona completamente à parte de outras estações e
 * todas as operações são parte de uma transação única.
 *
 * [ Durabilidade ] Resumo: Os efeitos de uma transação em caso de sucesso (commit) devem
 * persistir no banco de dados (Uma transação só tem sentido se houver gravação)
 */

fullStackPHPClassSession("transaction", __LINE__);
try {
  $pdo = Connect::getInstance();
  $pdo->beginTransaction();

  $pdo->query("INSERT INTO users (first_name, last_name, email, document) VALUES ('Lucas', 'Tenório', 'lucas@email.com', '2131231')");

  $userId = $pdo->lastInsertId();

  $pdo->query(query: "INSERT INTO users_address (user_id, street, number, complement) VALUES ('{$userId}', 'Rua Teste', '666', 'Casa') ");

  $pdo->commit();
} catch (PDOException $e) {
  var_dump($e);
}
