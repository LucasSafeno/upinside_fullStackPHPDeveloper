<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);
var_dump(
  [
    date_default_timezone_get(), // timezone do servidor
    date(DATE_W3C),
    date("d/m/y h:i:s"),
  ]
);

define("DATE_BR", "d/m/Y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);
var_dump([
  date_default_timezone_get(),
  date(DATE_BR)
]);

var_dump(getdate());

echo "<p>Hoje é dia ", getdate()["mday"], "</p>";

/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump([
  "strtotime NOW" => strtotime("now"),
  "time" => time(),
  "strtotime+10days" => strtotime("now +10days"),
  "DATE BR" => date(DATE_BR),
  'date +10days' => date(DATE_BR, strtotime('now +10days')),
  'date -10days' => date(DATE_BR, strtotime('now -10days')),
  'date +1year' => date(DATE_BR, strtotime('now +1year'))
]);

$format = "%d/%m/%Y %Hh%M minutos";
echo "<p> A hora atual é ", strftime($format) . "</p>";
