<?php


class DataBase {
    const USERNAME = 'root';
    const PASSWORD = '12345678';
    const HOST = 'localhost';
    const DATABASE = 'php_commerce';

    public function conn(){
        $conn = mysqli_connect(DataBase::HOST,self::USERNAME, self::PASSWORD);

        // 面向对象
        if($conn -> connect_error){
            echo '数据库连接失败';
        }

        mysqli_query($conn, 'set names utf8');

        mysqli_select_db($conn, self::DATABASE);

        return $conn;
    }

    public function find($table) {
        $conn = $this -> conn();
        $sql = "SELECT * FROM `{$table}`";
//        $rst = mysqli_query($conn, $sql);
        $rst = $conn -> query($sql);
        $arr = array();
        while ($data = mysqli_fetch_assoc($rst)){
            $arr[] = $data;
        }
        if(count($arr) > 0){;
            return $arr;
        }

        // 关闭数据库连接
        $conn -> close();
        return null;
    }
}

$dataBase = new DataBase;
//var_dump($dataBase -> conn());
echo '<pre>';
print_r($dataBase->find('user'));
//foreach ($dataBase ->find('user') as $item) {
//    var_dump($item);
//}
echo '</pre>';
