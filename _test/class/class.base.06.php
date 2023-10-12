<?php

class User06 {
    public function __construct(){
        echo '__construct';
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo '__destruct';
    }
}

$uesr06 = new User06();
