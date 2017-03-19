<?php
namespace greeting\en;
class Hi{
  function __construct(){
    echo '<h1>hi</h1>';
  }
}
namespace greeting\ko;
class Hi{
  function __construct(){
    echo '<h1>안녕</h1>';
  }
}
new \greeting\en\Hi();
new \greeting\ko\Hi();
?>
