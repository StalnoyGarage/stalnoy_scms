<?php
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
require_once __DIR__."/path_handler.php";
require_once __DIR__."/read_xls.php";



$array=PathHandler::files('/input/xls/*');
$hash_array=PathHandler::hashArray($array);
var_dump($array);
// var_dump(PathHandler::hashArray($array));

$file=jsonIO::checkHashFile();

if ($file==NULL){
  $status=jsonIO::writeData($hash_array);
  if ($status!="No error"){
    var_dump($status);
    exit();
  }
}
// var_dump($array);

// foreach ($hash_array as $key => $value) {   //NOTE: кусок кода для проверки по ключам 1 берется из имеющихся файлов, 2 из файла с хешеми и записями
//   if (array_key_exists($key,$file)){
//     var_dump($file);
//   } else {
//     echo $key."_nope".PHP_EOL;
//   }
// }

$arrayxml=PathHandler::files('/output/xml/*'); 
var_dump($arrayxml);

// foreach ($array as $a => $b) {
//   readXLS($a,$b);
// }

 ?>
