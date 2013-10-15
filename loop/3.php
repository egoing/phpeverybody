<?php
# i의 값으로 0을 할당한다. 
$i = 0;
# 종료조건으로 i의 값이 5보다 작다면 True, 같거나 크다면 False
while($i < 10){
    echo 'coding everybody';
    # 반복문이 실행될 때마다 i의 값을 1씩 증가시킨다. 그 결과 i의 값이 10이 되면 종료조건이 False가 되면서 반복문이 종료된다.
    $i += 1;
}
?>