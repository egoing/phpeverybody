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
use \greeting\en\Hi as HiEn;
use \greeting\ko\Hi as HiKo;
new HiEn();
new HiKo();
?>
