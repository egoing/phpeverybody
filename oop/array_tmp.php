<h1>Function</h1>
<?php
$data_array = array('one', 'two', 'three');
array_push($data_array, 'four');
foreach($data_array as $item){
  echo $item.'<br>';
}
var_dump(count($data_array));
?>
<h1>Object</h1>
<?php
$data_object = new ArrayObject(['one', 'two', 'three']);
$data_object->append('four');
$data_object->asort();
foreach($data_object as $item){
  echo $item.'<br>';
}
var_dump($data_object->count());
?>
