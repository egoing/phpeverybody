<?php
$name = 'data.txt';
var_dump(is_file($name));
var_dump(is_dir($name));
var_dump(filesize($name));
var_dump(file_get_contents($name));
var_dump(file_put_contents($name, rand(1,100)));
echo '<h1>OOP</h1>';

$file = new SplFileObject('data.txt');
var_dump($file->isFile());
var_dump($file->isDir());
var_dump($file->getSize());
var_dump($file->fread($file->getSize()));
var_dump($file->fwrite(rand(1,100)));
?>
