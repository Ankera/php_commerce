<?php
class Notify05 {
    protected function sayNotify01(): string {
        return 'sayNotify01';
    }

    private function sayNotify02(): string {
        return 'sayNotify01';
    }
}

class User05  extends Notify05 {
    public function say(): string
    {
//        echo $this->say2();
//        echo $this->say3();
        echo $this->sayNotify01();
        echo '<hr>';
        echo parent::sayNotify01();
        echo '<hr>';
        return '你好，后盾人';
    }

    public function sayNotify01(): string
    {
        return 'son=====';
    }

    protected function say2(): string
    {
        return '你好，后盾人 02';
    }

    private function say3(): string
    {
        return '你好，后盾人 03';
    }
}

$user05 = new User05();

echo $user05->say();
//echo $user05->say()
