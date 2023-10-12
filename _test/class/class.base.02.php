<?php

class User {
    const EXIST_TYPE = 1;

    protected $name;

    protected static $classname = '三年级一班';

    public static function make()
    {
    }

    public function say(){
        echo self::$classname.'<br/>';
        echo $this->getName().'你好'.'<hr/>';
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public static function getClassName(): string
    {
        return self::$classname;
    }
}

$obj = new User;
$obj->setName('后盾人');
$obj->say();

$lisi = new User();
$lisi->setName('李四');
$lisi->say();

echo User::getClassName();

echo '<hr/><hr/><hr/><hr/>';

class Modal {
    const EXISTS_VALID_DATE = 1;
    protected static $existType = 2;

    public function validate(){
        self::$existType = 5;
        echo self::EXISTS_VALID_DATE.self::$existType;
    }

}

$m = new Modal();
$m->validate();

echo '<hr/><hr/><hr/><hr/>';

//======================================================
abstract class Notify {
    protected $color = 'red';

    protected $credit = 10;

    abstract public function content();

    // 最终
    //  public final function message(): string
    public function message(): string
    {
        return $this->content().'<span style="color: '.$this -> color.'">发送消息,奖励'.$this->credit().'分</span>';
    }

    public function credit(): int
    {
        return $this->credit;
    }


}

class User2 extends Notify {

    protected $credit = 20;
    public function register()
    {
        echo $this->message();
    }

    public function content(): string
    {
        return 'User 2 ';
    }

    public function message(): string
    {
        echo '这是父类补充的方法 <br/>';
        return parent::message();
    }
}

class Comment extends Notify {
    public function send(){
        echo $this->message();
    }

    public function content(): string
    {
        return 'Comment 2 ';
    }
}

$user2 = new User2;
$user2->register();
echo $user2->content();

