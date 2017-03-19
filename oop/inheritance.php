<?php
class Animal{
  function run(){
    print('running...<br>');
  }
  function breathe(){
    print('breathing...<br>');
  }
}
class Human extends Animal{
  function think(){
    print('thinking...<br>');
  }
  function talk(){
    print('talking...<br>');
  }
}
$human = new Human();
$human->run();
$human->think();
?>
