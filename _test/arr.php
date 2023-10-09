<?php
$student[] = 10;
$student[] = "Tom";
$student['age'] = 10;

$student = array(10, 'Tom-Tom', 12);

var_dump($student);
echo '<hr>';

$arr = array('a', 'b', 'c');

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i].'<br>';
}

echo '<hr>';

$arr2 = array(
    'name' => 'Tom',
    "age" => 18
);
foreach ($arr2 as $key => $value) {
    echo $key.' => '.$value.'<br>';
}

echo '<hr>';

$arr3 = [
    'a',
    'b',
    'a'
//    array('111', '2222')
];

print_r(array_count_values($arr3));
//echo $GLOBALS;

// array_count_values()
// array_key_exists()
// array_search()
// in_array()
echo '<hr>';
list($name, $age, $type) = array('Tom', 18, '66');
echo $name.' '.$age.' '.$type;

echo '<hr>';
$str = 'abcda';
var_dump($str);
echo '<hr>';
var_dump(trim($str, 'ab'));
var_dump(strtoupper($str));
var_dump(strtolower($str));
var_dump(substr_count($str, 'a'));
echo '<hr>';
var_dump(strpos($str, '2'));
echo '<hr>';
var_dump(strstr($str, 'c', true));
echo '<hr>';
var_dump(str_replace('c', "BB", $str));
$str2 = 'aa123bb';
var_dump(str_replace(array('1', '2', '3'), array('一','二','三'), $str2, $count));
echo $count;

// trim();
// ltrim();
// rtrim();
// strtoupper();
// strtolower();
// substr_count();
// strpos();
// strstr();

echo '<hr>';
$str3 = <<<START
    <div>hello world</div>
    <p style="color: red">Tom</p>
START;
echo $str3;
echo htmlspecialchars($str3);
echo '<hr>';
echo strip_tags($str3);
echo '<hr>';
$str4 = 'abcdefg';
var_dump(substr($str4, 1));

echo '<hr>';
var_dump(explode('c', $str4));

echo '<hr>';
$str5 = 'hello world';
print_r(str_split($str5, 2));

