<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.05 - Explorando estilos de busca");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/*
 * [ fetch ] http://php.net/manual/pt_BR/pdostatement.fetch.php
 */

fullStackPHPClassSession("fetch", __LINE__);
$connect = Connect::getInstance();

$read = $connect->query("SELECT * FROM users LIMIT 3");

if (!$read->rowCount()) {
  echo "<p class='trigger warning'>Nenhum registro encontrado.</p>";
}

var_dump($read->fetch());

/*
 * [ fetch all ] http://php.net/manual/pt_BR/pdostatement.fetchall.php
 */
fullStackPHPClassSession("fetch all", __LINE__);


/*
 * [ fetch save ] Realziar um fetch diretamente em um PDOStatement resulta em um clear no buffer da consulta. Você
 * pode armazenar esse resultado em uma variável para manipilar e exibir posteriormente.
 */
fullStackPHPClassSession("fetch save", __LINE__);


/*
 * [ fetch modes ] http://php.net/manual/pt_BR/pdostatement.fetch.php
 */
fullStackPHPClassSession("fetch styles", __LINE__);
