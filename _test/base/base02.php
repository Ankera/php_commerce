<?php
// 严格模式
declare(strict_types = 1);

include_once 'header.php';
include_once 'header.php';
include_once 'header.php';
include 'footer.html';
require 'footer.html';


echo show_02();

echo '<hr />';

function sum(...$args): float|int
{
    return array_sum($args);
}

echo sum(1, 2, 3);

function show_num(int $num): ?int
{
    return $num;
}

$name = "Tom";
function showName(&$n): string
{
    $n = 'John';
    return $n;
}

echo showName($name);

$callback = 'showName';
echo $callback($name);

echo '<hr />';

$file = 'hello.png';
$ext = trim(strchr($file, '.'), '.');
$action = strtolower($ext);

function jpg():void
{
    echo 'jpg function';
}

function png():void
{
    echo 'png function';
}

$action();
