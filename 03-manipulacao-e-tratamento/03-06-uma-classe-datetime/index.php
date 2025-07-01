<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);
define("DATE_BR", "d/m/Y");
$dateNow = new DateTime();
$dateBirth = new DateTime("1994-10-14");
$dateStatic = DateTime::createFromFormat(DATE_BR, "09/05/2000");

var_dump(
  $dateNow,
  $dateBirth,
  $dateStatic
  // get_class_methods($dateNow)
);

var_dump([
  $dateNow->format(DATE_BR)
]);
/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);
$dateInterval = new DateInterval("P10Y2MT10M");

var_dump($dateInterval);

$dateTime = new DateTime('now');
$dateTime->add($dateInterval);
// $dateTime->sub($dateInterval);
var_dump($dateTime);

$birth = new DateTime(date('Y') . '-10-14');
$dateNow = new DateTime('now');

$diff = $dateNow->diff($birth);
var_dump($diff);


/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime('now');
$interval = new DateInterval('P1M');
$end = new DateTime("2025-12-31");

$period = new DatePeriod($start, $interval, $end);

var_dump(
  [
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR)
  ],
  $period,
  get_class_methods($period)
);

echo "<h1>Sua Assinatura</h1>";
foreach ($period as $recurrences) {
  echo "<p>Próximo vencimento : {$recurrences->format(DATE_BR)}</p>";
};
