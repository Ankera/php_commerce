<?php

class Person {
    const PI = 3.14;
    /**
     * 属性
     * @var
     */
    var $name;
    var $age;

    /**
     * 成员方法
     * @return void
     */
    public function add(){
        echo 'add Person';
    }

    protected function edit(){
        $this->del();
    }

    private function del(){
        echo 'del';
    }
}

$person = new Person();
var_dump($person);
echo '<hr>';

//$person::
$person->add();

echo $person->name;

echo Person::PI;
//$person->name;

echo '<hr>';


class MYBase {
    var $name;
    var $age;
    function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

    function __destruct(){
        unset($this->name);
        unset($this->age);
    }
}

echo '<hr>';
$myBase = new MYBase('Tom', 18);
echo $myBase->name.'  =  '.$myBase->age;
