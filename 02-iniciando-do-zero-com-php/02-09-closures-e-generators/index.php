<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);
$myage = function ($year) {
  $age = date("Y") - $year;
  return "<p>Você têm {$age} anos </p>";
};

echo $myage(1994);
echo $myage(2000);
echo $myage(1996);
echo $myage(1989);

$priceBrl = function ($price) {
  return number_format($price, 2, ",", ".");
};

echo "<p>O projeto custo R$ {$priceBrl(3600)}. Vamos fechar?</p>";

$mycart = [];
$mycart["totalPrice"] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$mycart) {
  $mycart[$item] = $qtd * $price;
  $mycart["totalPrice"] += $mycart[$item];
};

$cartAdd("HTML5", 1, 497);
$cartAdd("Jquery", 1, 497);
var_dump($mycart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);
