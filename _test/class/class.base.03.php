<?php

/**
 * 接口 abstract
 */


interface InterfaceCache {
    public function set();
    public function get();

}

class Mysql implements InterfaceCache {
    public function get(){
        echo 'Mysql';
    }
    public function set(){

    }
}

class RedisCache implements InterfaceCache {
    public function get(){

    }
    public function set(){

    }
}

class Cache {
    public function instance(string $driver){
        switch ($driver) {
            case 'mysql':
                return new Mysql();
            case 'redis':
                return new RedisCache();
        }
    }
}

$cache = new Cache();
$ins = $cache->instance('mysql');
$ins->get();
