<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);
// $user = new \Source\Interpretation\User();
$user = new \Source\Interpretation\User(
  'Lucas',
  'Tenório',
  'lucas@email.com'
);
var_dump($user);
/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);
$lucas = $user;

$teste = $lucas;
$teste->setLastName("Teste");
$teste->setFirstName("Teste");
// $teste->setEmail("teste@email.com");

$teste = clone $lucas;

$teste->setFirstName("Teste1");
$teste->setLastName("Teste1");
$teste->setEmail("teste1@email.com");


var_dump($lucas, $teste);

/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);
