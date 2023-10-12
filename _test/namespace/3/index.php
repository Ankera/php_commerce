<?php

namespace App;

include 'order.php';
include 'comment.php';

class User {
    public static function make(): string
    {
        return __METHOD__;
    }
}


//echo User::make();

echo Controller\Order::make();

echo '<hr />';

echo \Common\Comment::make();
