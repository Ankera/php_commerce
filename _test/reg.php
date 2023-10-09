
<?php

/**
 * 一、定界符，下面四种都可以
 * / # {} |
 * /test/
 * #test/
 * {test}
 * |test|
 */
$pattern = "/test/i";

$str = "hello test1 Test";

var_dump(preg_match_all($pattern, $str, $arr));

echo '<pre>';
var_dump($arr);
echo '</pre>';

echo '<hr />';

/**
 * 二 常用
 * \d
 * 0 1 2 3 4 5 6 7 8 9
 *
 * \D
 * 匹配非0 1 2 3 4 5 6 7 8 9
 *
 * \s 一个空白字符，换行符、制表符
 *
 * \S 匹配非空白字符
 *
 * \w 数字、字母、下划线
 *
 * \W 匹配非数字、字母、下划线
 *
 *  . 匹配除换行符以外的任意字符
 *
 * * 出现0次、1次、多次
 *
 * + 出现1次、多次
 *
 * ? 出现0次、1次
 *
 * {n} 出现n次
 *
 * {n, } 出现大于等于n次
 *
 * {n, m} 出现 n 到 m 次
 *
 * ^ === \A 匹配开始的位置
 *
 * $ === \Z 匹配结束的位置
 *
 * | 匹配两个或者多个模式
 *
 * [] 匹配里面的任意政府
 *
 * [^] 匹配除[]以外的任意字符
 *
 */
$pattern1 = '/t\dst/i';
$str1 = "hello t0st";
var_dump(preg_match_all($pattern1, $str1, $arr1));

echo '<pre>';
var_dump($arr1);
echo '</pre>';

echo '<hr />';

$pattern2 = '/t\sst/i';
$str2 = "hello t st t\nst t\tst";
var_dump(preg_match_all($pattern2, $str2, $arr2));

echo '<pre>';
var_dump($arr2);
echo '</pre>';

echo '<div>============================</div>';

$pattern3 = '/te*st/i';
$str3 = 'hello teeeest tst t st test';
var_dump(preg_match_all($pattern3, $str3, $arr3));
echo '<pre>';
var_dump($arr3);
echo '</pre>';


echo '<div>============================</div>';
$pattern4 = '/te{1}st/';
$str4 = 'hello test t st';
var_dump(preg_match_all($pattern4, $str4, $arr4));
echo '<pre>';
var_dump($arr4);
echo '</pre>';


echo '<div>===========综合案例 01=========</div>';
$pattern5 = '/t.{3}st/';
$str5 = 'hello teeest t...st t123st t|||st';
var_dump(preg_match_all($pattern5, $str5, $arr5));
echo '<pre>';
var_dump($arr5);
echo '</pre>';

echo '<div>===========综合案例 02 贪婪匹配尽可能多的匹配=========</div>';
/**
 * . 与  * 匹配
 * .* 配合使用的情况下是贪婪匹配
 *
 * 下面匹配的是 tstabcdeft 而不是 tst
 */
$pattern6 = '/t.*t/';
$str6 = 'hello tstabcdeft';
var_dump(preg_match_all($pattern6, $str6, $arr6));
echo '<pre>';
var_dump($arr6);
echo '</pre>';


/**
 * preg_match_all 是找到所有
 */
echo '<div>===========综合案例 03 非贪婪匹配尽可能少的匹配=========</div>';
$pattern7 = '/t.*?t/';
$str7 = 'hello tstabcdeftxxyyt';
var_dump(preg_match_all($pattern7, $str7, $arr7));
echo '<pre>';
var_dump($arr7);
echo '</pre>';


echo '<div>============================</div>';
$pattern8 = '/hello|t.*?st/';
$str8 = 'hello teest t st hello';
var_dump(preg_match_all($pattern8, $str8, $arr8));
echo '<pre>';
var_dump($arr8);
echo '</pre>';


/**
 * () 将括号里面的内容作为一个整体
 * \\1 代表圆括号里面的内容
 */
echo '<div>============== \\ 匹配相同文职 ==============</div>';
$pattern9 = '/t(e)st\\1/';
$str9 = ' teste ';
var_dump(preg_match_all($pattern9, $str9, $arr9));
echo '<pre>';
var_dump($arr9);
echo '</pre>';


echo '<div>=============正则函数===============</div>';
/**
 * preg_match
 * preg_match_all
 * preg_replace
 */
$pattern10 = '/t(.*?)st/';
$str10 = 'abcdetsssest tqdsst test txsdfst';
var_dump(preg_match_all($pattern10, $str10, $arr10));
echo '<pre>';
var_dump($arr10);
echo '</pre>';

var_dump(preg_match($pattern10, $str10, $arr10_1, PREG_OFFSET_CAPTURE));

echo '<pre>';
var_dump($arr10_1);
echo '</pre>';


/**
 * \\1 === $1
 */
echo '<div>=============preg_replace===============</div>';
$pattern11 = '/<div>(.*?)<\/div>/';
$str11 = 'sdafsf<div>这是第一个</div> <hr/> <div>这是第二个</div>';
$str11_1 = '<a href="https://www.baidu.com/" style="color: red">\\1</a>';
var_dump(preg_match($pattern11, $str11, $arr11));
echo '<pre>';
var_dump($arr11);
echo '</pre>';

echo preg_replace($pattern11, $str11_1, $str11);
