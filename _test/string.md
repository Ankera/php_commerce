#### 常用字符串方法

```php
// 定义常量的两种方法
const NAME = 'Tom';
define('TYPE', 1);

// 判断一个常量是否存在
defined('NAME');

// 获取定义的常量
get_defined_constants();

// 获取自己定义的所有常量
get_defined_constants(true)['user'];
```

```php
ucfirst('word');  // 首字母大写

ucwords('word');  // 全部大写

ucwords('hello | world', '|');  // 每个单词首字母大写

md5('hello');  // 字符串转md5

explode('&', 'h&l&l&e&0', 4); // 按照分隔符@拆分字符串

$arr1 = ['h', 'l', 'l'];
implode('@', $arr1);     // 按照分隔符 @ 合并数组每一项

$str = '浙江杭州 hello world'; // 用这个 substr 截取一个乱码
mb_substr($str, 0, 1);  // 浙   // substr 和 mb_substr 一样，mb_substr可以截取中文字符
```
