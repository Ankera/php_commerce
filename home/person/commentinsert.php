<?php
if (session_status() === PHP_SESSION_NONE) {
    // 如果会话未启动，则调用 session_start()
    session_start();
}

include '../../public/common/config.php';
global $conn;

$content=$_POST['content'];
$user_id=$_SESSION['home_userid'];
$shop_id=$_POST['shop_id'];
$time=time();
$sql="insert into comment(user_id,content,shop_id,time) values('{$user_id}','{$content}','{$shop_id}','{$time}')";
echo $sql;
if(mysqli_query($conn, $sql)){
    echo "<script>location='../shop.php?shop_id={$shop_id}'</script>";
}

mysqli_close($conn);