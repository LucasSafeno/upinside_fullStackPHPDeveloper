<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.02 - Classes, propriedades e objetos");

/*
 * [ classe e objeto ] http://php.net/manual/pt_BR/language.oop5.basic.php
 */
fullStackPHPClassSession("classe e objeto", __LINE__);
require __DIR__ . "/classes/User.php";

$user = new User();
var_dump($user);

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.properties.php
 */
fullStackPHPClassSession("propriedades", __LINE__);
$user->firstName = "Lucas";
$user->lastName = "Tenório";
$user->email = "cursos";

var_dump($user);

echo "<p>O email de {$user->firstName} é {$user->email}.</p>";

/*
 * [ métodos ] São as funções que definem o comportamento e a regra de negócios de uma classe
 */
fullStackPHPClassSession("métodos", __LINE__);
$user->setFirstName("Lucas");
$user->setLastName("Cavalcanti");

if (!$user->setEmail('cursos')) {
  echo "<p class='trigger error'>O email {$user->getEmail()} não é válido.</p>";
}

var_dump($user);
