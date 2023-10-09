#### PHP 笔记

##### 命令
```javascript
/**
 * ?:
 * `` 执行系统命令
 * @ 屏蔽错误
 * =>
 * ->
 * instanceof
 */
```

##### 双"
只有双"才可以执行php语句
```php
for ($i = 0; $i < 10; $i++){
    echo "{$i} ==== <br />";
}
```

##### break
```php
for ($i = 0; $i < 10; $i++){
    if($i === 5){
    // 跳出当前循环，等同于 break 1;
        break;
    }
    echo "{$i} ==== <br />";
}

for ($i = 0; $i < 10; $i++){
    echo "{$i} ==outer== <br />";
    for ($j = 0; $j < 10; $j++) {
        if($j === 5){
        // 跳出最外层的循环;
            break 2;
        }
        echo "{$j} ==inner== <br />";
    }
}
```

##### static
```php
// 静态变量，函数执行完，不销毁
function test()
{
    static $num = 10;
    echo $num++;
}

test(); // 10
test(); // 11
```

##### function
```php
// func_get_arg(0); 第0个参数
// func_get_args(); 参数数组集合
// func_num_args(); 参数个数

// 可变函数不可以用于 echo、print、unset、isset、include、require

function test($a, $b, $c)
{
    static $num = 10;
    echo $num++.$a.$b.$c;
    echo '<hr>';
    var_dump(func_get_arg(3));
    echo '<hr>';
    var_dump(func_get_args());
    echo '<hr>';
    var_dump(func_num_args());
}
```

##### foreach 遍历 array
```php
$arr = array('a', 'b', 'c');

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i].'<br>';
}

// =========================================

$arr2 = array(
    'name' => 'Tom',
    "age" => 18
);
foreach ($arr2 as $key => $value) {
    echo $key.' => '.$value.'<br>';
}
```

##### array 方法汇总
```php
// array_count_values()
// array_key_exists()
// array_search()
// in_array()
// array_filter()
```

##### array 拆分 list
```php
// 仅能用于数字索引并且假定从0开始的数字索引
list($name, $age, $type) = array('Tom', 18, '66');
echo $name.' '.$age.' '.$type;
```

##### php 中超全局变量
```php
// $GLOBALS
// $_SERVER
// $_GET            $_GET['name']
// $_POST           $_POST['name']
// $_FILES
// $_SESSION
// $_COOKIE
// $_ENV
// $_REQUEST
```

##### 字符串常用方法
```php
// trim();
// ltrim();
// rtrim();
// strtoupper();
// strtolower();
// substr_count();
// strpos();
// strstr();

// str_replace();
var_dump(str_replace(array('1', '2', '3'), array('一','二','三'), $str2, $count));
// 替换的次数
echo $count;

$strHtml = <<<START
    <div>hello world</div>
    <p style="color: red">Tom</p>
START;
echo $strHtml;
echo htmlspecialchars($strHtml); // 展示富文本
echo '<hr>';
echo strip_tags($str3); // 去掉标签，只展示innerText

// 截取字符串
$str4 = 'abcdefg';
var_dump(substr($str4, 1));

// 分割字符串，得到数组
explode('c', $str4);

// 字符串分割，以2个字节分割
str_split($str5, 2);
```
