<?php

$name = 'Tom';
function show1(): void
{
    echo $GLOBALS['name'];
}

function show2(): void
{
    global $name;
    echo $name;
    // 函数内部删除不了外部变量
    unset($name);
}

show1();
show2();

echo $name;

echo '<hr>';

function sum(): void
{
    // 静态变量，持久化
    static $num = 1;
    $num ++;
    echo $num;
}

sum();
sum();
sum();
sum();

echo '<hr>';

/**
 * 单引号不可以定义变量
 * 双引号可以定义变量
 */
header('Content-type: text/html; charset=utf-8');

$string = "Hello";

echo "后盾人 {$string}1";

echo "\$string";

$str2 = <<<PHP
    <div>hello</div>
    <div>hello</div>
    <div>hello</div>
PHP;

echo $str2;

//echo trim($string);

echo ucfirst('word');
echo ucwords('word');
echo ucwords('hello | world', '|');

echo '<hr>';

echo md5('hello');

$arr = explode('&', 'h&l&l&e&0', 4);
print_r($arr);

$arr1 = ['h', 'l', 'l'];
echo '<hr>';
echo implode('@', $arr1);

$str = 'hello world';
echo '<hr>';
echo mb_substr($str, 0, 1);
echo '<hr>';
var_dump(defined('NAME'));

const NAME = 'Tom';

echo '<hr>';

print_r(get_defined_constants(true)['user']);

echo '<hr>';

$str23 = 'hello';
echo $str2111??'world';


echo '<hr>';
echo '<hr>';

$status = false;
if($status):
    echo 'hello';
else:
    echo 'world---';
endif;

echo '<hr />';

$num = 0;
while (true) {
    $num++;
    switch ($num) {
        case $num % 2 === 0:
            echo $num.'<hr>';
            break;
        case $num % 15 === 0:
            echo $num.'<hr>';
            break 2;
    }
}
