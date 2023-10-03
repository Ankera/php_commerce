<?php

include '../a.php';

global $number;
// 在这里可以访问$a.php中的$number变量
$result = $number + 10;

echo $result; // 输出110