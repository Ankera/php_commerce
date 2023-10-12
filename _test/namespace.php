<?php
namespace {
    $str1 = 'hello';
}

namespace MYProject_01 {
    $str = 'hello';

    global $str1;
    echo $str.$str1;

//    namespace\DEMO01 {
//        $str2 = 'world';
//    }
}

namespace MYProject_01 {
    $str = 'hello';
}
