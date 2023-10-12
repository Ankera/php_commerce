<?php
abstract class Query {

    abstract protected function record(array $data);
    public function select(){
        $this->record(['name'=>"Tom",'age'=>21, 'mobile'=>199122224444]);
    }
}


class Modal07 extends Query {
    protected $field = [];

    protected $deny = ['name'];

    public function all(){
        $this->select();
        return $this->field;
    }

    public function __mobile(){
        return substr($this->field['mobile'],0, 8).'***';
    }
    protected function record(array $data)
    {
        // TODO: Implement record() method.
        $this->field=$data;
    }

    public function __get($name){

        if(method_exists($this, '__'.$name)){
            return call_user_func_array([$this, '__'.$name], []);
        }
//        echo $name;
//        die;
        if(isset($this->field[$name])){
            return $this->field[$name];
        }
        throw new Exception('参数异常');
    }

    /**
     * 魔术函数
     * @param $name
     * @param $value
     * @return void
     * @throws Exception
     */
    public function __set($name, $value){
        if(isset($this->field[$name])){
//            echo 'name'.$value;
            $this->field[$name] = $value;
        } else {
            throw new Exception('设置异常');
        }
    }

    /**
     * @throws Exception
     */
    public function __unset($name){
        if(!isset($this->field[$name]) || in_array($name, $this->deny)){
            throw  new Exception('参数不存在或者禁止操作');
        }
        $this->field[$name] = '';

    }

    public function __isset($name){
        return isset($this->field[$name]);
    }

    public function __call($name, $agruments){
        $action = 'getAttribute'.$name;
        if(method_exists($this, $action)){
            return call_user_func_array([$this, $action], $agruments);
        }
    }
}

class User07 extends Modal07 {
    public function getAttributeMobile(){
        var_dump($this);
//        echo $this->field['mobile'];
    }
}

try {
    $modal07 = new Modal07();
    print_r($modal07->all());

//    $user07->name = "收拾收拾";
    $modal07->mobile = 123456789999;
    echo $modal07->mobile;

//    unset($user07->name);
    echo '<hr />';
    echo '<hr />';
    var_dump(isset($modal07->age));

    $user07 = new User07();
    $user07->mobile();
}catch (Exception $e) {
    echo $e->getMessage();
}
