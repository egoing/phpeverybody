<?php
namespace en;
class Hi{
  function __construct(){
    echo '<h1>hi</h1>';
  }
}
namespace ko;
class Hi{
  function __construct(){
    echo '<h1>안녕</h1>';
  }
}
new \en\Hi();
new \ko\Hi();
?>
