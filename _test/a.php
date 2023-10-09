<!--

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<div class="main">
    hello world
</div>
</body>
</html>

-->

<?php
//const A = "------------------";
//
//echo __FILE__;
//echo '<h5>'.A.'</h5>';
//echo __DIR__;
//echo '<h5>'.A.'</h5>';
//echo __LINE__;
//$a = '11';
//echo '<h5>'.A.'</h5>';
//var_dump(__LINE__);
//
//$b = "1111";
//echo '<h5>'.A.'</h5>';
//var_dump((bool)($a and array()));
//
//// and(&&) or(||) xor !
//
//$ip = `node -v`;
//var_dump($ip);
//
///**
// * ?:
// * `` 执行系统命令
// * @ 屏蔽错误
// * =>
// * ->
// * instanceof
// */

//if(isset($_GET['id'])){
//    $a = (int)$_GET['id'];
//    if($a <= 0) {
//        echo '小于0'.$a;
//    } elseif ($a > 10) {
//        echo '10000'.$a;
//    } else {
//        echo 'No----';
//    }
//
//    var_dump($a);
//}
//
//for ($i = 0; $i < 10; $i++){
//    echo "{$i} ==ii== <br />";
//    for ($j = 0; $j < 10; $j++) {
//        if($j === 5){
//            break 2;
//        }
//        echo "{$j} ==jj== <br />";
//    }
//}

//$a = "hello ";
//const AB = 'AB ';
//function test()
//{
//    global $a;
//    echo "test ";
//    echo $a;
//    echo AB;
//
//    static $inner_test = 'inner_test';
//
//    echo ' '.$inner_test;
//}


//echo test

function test($a, $b, $c)
{
    static $num = 10;
    echo $num++.$a.$b.$c;
    echo '<hr>';
    var_dump(func_get_arg(3));
    echo '<hr>';
    var_dump(count(func_get_args()));
    echo '<hr>';
    var_dump(func_num_args());
}

echo '====', PHP_VERSION_ID;
test(11, 22, 33, 44);
//test();

// 可变函数不可以用于 echo、print、unset、isset、include、require