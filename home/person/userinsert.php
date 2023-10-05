<?php

if (session_status() === PHP_SESSION_NONE) {
    // 如果会话未启动，则调用 session_start()
    session_start();
}

include '../../public/common/config.php';
global $conn;

$name=$_POST['name'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$user_id=$_SESSION['home_userid'];

$sql = "INSERT INTO touch(name,addr,tel,email,user_id) VALUES('{$name}', '{$addr}', '{$tel}', '{$email}', '{$user_id}')";

if(mysqli_query($conn, $sql)){
    echo "<script>location='./userlist.php'</script>";
}

mysqli_close($conn);