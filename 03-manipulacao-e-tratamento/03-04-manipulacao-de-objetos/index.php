<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");
$arrProfile = [
  "name" => "Lucas",
  "company" => "AtualTech",
  "mail" => "contato@atualtech.online"
];
$objProfile = (object) $arrProfile;

echo "<p> {$arrProfile['name']} trabalha na {$arrProfile['company']} ";
echo "<p> {$objProfile->name} trabalha na {$objProfile->company} ";

$ceo = $objProfile;
unset($ceo->company);

var_dump($ceo);
/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$company = new stdclass();
$company->company = "AtualTech";
$company->ceo = $ceo;
$company->manager = new stdClass();
$company->manager->name = "Zé";
$company->manager->mail = 'ze@company.net';

var_dump($company);



/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);
$date = new DateTime();


var_dump([
  'class' => get_class($date),
  'methods' => get_class_methods($date),
  'vars' => get_object_vars($date),
  'parent' => get_parent_class($date),
  'subclass' => is_subclass_of($date, "DateTime")
]);


$exception = new PDOException();

var_dump([
  'class' => get_class($exception),
  'methods' => get_class_methods($exception),
  'vars' => get_object_vars($exception),
  'parent' => get_parent_class($exception),
  'subclass' => is_subclass_of($exception, "Exception")
]);
