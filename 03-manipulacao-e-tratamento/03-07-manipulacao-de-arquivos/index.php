<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__ . "/file.txt";
if (file_exists($file) && is_file($file)) {
  echo "<p>existe</p>";
} else {
  echo "<p>não existe</p>";
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);
if (!file_exists($file) || !is_file($file)) {
  $fileOpen = fopen($file, "w");
  fwrite($fileOpen, "Linha 01" . PHP_EOL);
  fwrite($fileOpen, "Linha 02" . PHP_EOL);
  fwrite($fileOpen, "Linha 03" . PHP_EOL);
  fwrite($fileOpen, "Nulla qui veniam ad velit deserunt mollit voluptate ipsum reprehenderit elit aliquip officia non nulla." . PHP_EOL);
  fclose($fileOpen);
} else {
  var_dump(
    file($file),
    pathinfo($file)
  );
}


echo "<p>", file($file)[3], "</p>";

$open = fopen($file, 'r');
while (!feof($open)) {
  echo "<p>", fgets($open), "</p>";
}
$open = fclose($open);
/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__ . "/teste2.txt";
if (file_exists($getContents) || is_file($getContents)) {
  echo file_get_contents($getContents);
} else {
  $data = "<article><h1>Lucas</h1><p>CEO AtualTech <br> contato@atualtech.online</p></article>";
  file_put_contents($getContents, $data);
  echo file_get_contents($getContents);
}


// unlink($getContents);
// unlink($file);

if (file_exists(__DIR__ . "/teste3.txt") && is_file(__DIR__ . "/teste3.txt")) {
  unlink(__DIR__ . "/teste3.txt");
}
