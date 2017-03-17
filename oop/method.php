<?php
class MyFileObject{
  $filename;
  function isFile(){
    return is_file($this->filename);
  }
  function isDir(){
    return is_dir($this->filename);
  }
  function setFileName($fname){
    $this->filename = $fname;
  }
}
$file = new MyFileObject();
$file->setFileName('data.txt');
var_dump($file->isFile());

$file2 = new MyFileObject();
$file2->setFileName('data2.txt');
var_dump($file2->isFile());
?>
