<?php
// require_once 'greeting.php';
function autoloader($path){
  $path = str_replace('\\', '/', $path);
  $path = $path.'.php';
  print("path : {$path}");
  require_once $path;
}
spl_autoload_register('autoloader');
use \greeting\en\Hi as HiEn;
use \greeting\ko\Hi as HiKo;
new HiEn();
new HiKo();
