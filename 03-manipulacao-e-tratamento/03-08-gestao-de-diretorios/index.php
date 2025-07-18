<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);
$folder = __DIR__ . "/uploads";
if (!file_exists($folder) && !is_dir($folder)) {
  mkdir($folder, 0755);
} else {
  var_dump(scandir($folder));
}

/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("copiar e renomear", __LINE__);
$file = __DIR__ . "/teste.txt";
var_dump(
  pathinfo($file),
  scandir($folder),
  scandir(__DIR__)
);

if (!file_exists($file) || !is_file($file)) {
  fopen($file, 'w');
} else {
  // copy($file, $folder . '/' . basename($file));
  // var_dump(filemtime($file), filemtime(__DIR__ . "/uploads/teste.txt"));
  // rename(__DIR__ . "/uploads/teste.txt", __DIR__ . "/uploads/" . time() . "." . pathinfo($file)["extension"]);
  rename($file, __DIR__ . "/uploads/" . time() . "." . pathinfo($file)["extension"]);
}

/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);
