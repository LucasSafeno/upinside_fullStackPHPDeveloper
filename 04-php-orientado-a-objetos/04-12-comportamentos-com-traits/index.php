<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.12 - Comportamentos com traits");

require __DIR__ . "/source/autoload.php";

/*
 * [ trait ] São traços de código que podem ser reutilizados por mais de uma classe. Um trait é como um compoetamento
 * do objeto (BEHAVES LIKE). http://php.net/manual/pt_BR/language.oop5.traits.php
 */
fullStackPHPClassSession("trait", __LINE__);

$user = new \Source\Traits\User(
  "Lucas",
  "Tenório",
  "lucas@email.com"
);

$address = new \Source\Traits\Address(
  'Nome da Rua',
  10,
  'Final da Rua'
);


$register = new \Source\Traits\Register(
  $user,
  $address,
  $register->getAddress(),
  $register->getUser()->getFirstName(),
  $register->getAddress()->getStreet()
);


var_dump($register);
