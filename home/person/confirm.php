<?php
if (session_status() === PHP_SESSION_NONE) {
    // 如果会话未启动，则调用 session_start()
    session_start();
}

include '../../public/common/config.php';
global $conn;

$code=$_GET['code'];
$confirm=1;

$sql="update indent set confirm=1 where code='{$code}'";

if(mysqli_query($conn, $sql)){
    echo "<script>location='./orderlist.php'</script>";
}

mysqli_close($conn);