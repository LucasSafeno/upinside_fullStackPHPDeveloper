<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);
$string = "O ultimo show do AC/DC foi incrivel";
var_dump([
  "string" => $string,
  "strlen" => strlen($string),
  "mb" => mb_strlen($string),
  "substr" => substr($string, "9"),
  "mb_substr" => mb_substr($string, "9"),
  "strtoupper" => strtoupper($string),
  "mb_strtoupper" => mb_strtoupper($string),
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString = $string;

var_dump([
  "stringtoupper" => mb_strtoupper($string),
  "stringtolower" => mb_strtolower($string),
  "mb_convert_ UPPER" => mb_convert_case($string, CASE_UPPER),
  "mb_convert_ LOWER" => mb_convert_case($string, CASE_LOWER),
  "mb_convert_ TITLE" => mb_convert_case($string, MB_CASE_TITLE),

]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);
$mbReplace = $mbString . "Fui, iria novamente, e foi épico";

var_dump([
  "mb_strlen" => mb_strlen($mbReplace),
  "mb_strpost" => mb_strpos($mbReplace, ", "),
  "mb_strrpost" => mb_strrpos($mbReplace, ", "),
  "mb_substr" => mb_substr($mbReplace, 38 + 2, 14),
  "mb_strstr" => mb_strstr($mbReplace, ", ", true),
  "mb_strrchr" => mb_strrchr($mbReplace, ", "),
]);

$mbStrReplace = $string;
echo "<p>", $string, "</p>";
echo "<p>", str_replace("AC/DC", "Nirvana", $mbStrReplace), "</p>";
echo "<p>", str_replace(["AC/DC", "eu fui", "ultimo"], ["Nirvana", "não fui", "penultimo"], $mbStrReplace), "</p>";


$article = <<<ROCK
  <article>
    <h3>event</h3>
    <p>desc</p>
  </article>
ROCK;

$articledata = [
  'event' => 'Rock in Rio',
  'desc' => $mbStrReplace
];

echo str_replace(array_keys($articledata), array_values($articledata), $article);

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=lucas&email=teste@email.com";
mb_parse_str($endPoint, $parseEndPoint);
var_dump([
  $endPoint,
  $parseEndPoint
]);
