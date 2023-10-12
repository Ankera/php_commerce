<?php

namespace App;

//spl_autoload_register(function ($class){
//    echo  '====='.$class.'<hr/>';
//    $file = str_replace('\\', '/', $class) . '.php';
//    require $file;
//});

class Bootstrap {

    public static function boot(): void
    {
        spl_autoload_register([new self, 'autoload']);
    }

    public function autoload(string $class): void
    {
        $file = str_replace('\\', '/', $class) . '.php';
        require $file;
    }
}


echo '=======1';

Bootstrap::boot();

