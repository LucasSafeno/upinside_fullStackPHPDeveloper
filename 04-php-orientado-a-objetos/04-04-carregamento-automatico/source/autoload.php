<?php

spl_autoload_register(function ($class) {
  $prefix = "Source\\";
  $basedir = __DIR__ . "/";

  $len = strlen($prefix);

  if (strncmp($prefix, $class, $len) !== 0) {
    return;
  }

  $relative_class = substr($class, $len);

  $file = $basedir . str_replace("\\", "/", $relative_class) . ".php";

  if (file_exists($file)) {
    require $file;
  }
});
