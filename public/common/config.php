<?php
$servername = "localhost"; // MySQL服务器主机名
$username = "root";    // MySQL用户名
$password = "12345678";    // MySQL密码
$database = "php_commerce";      // 数据库名称

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $database);

// 检查连接是否成功
if (!$conn) {
    die("连接失败：" . mysqli_connect_error());
}

// 连接成功后可以执行数据库操作
// ...
//$sql = "SELECT * FROM `user`";
//
//if (mysqli_query($conn, $sql)) {
//    echo "数据插入成功========";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

// 关闭连接
//mysqli_close($conn);
