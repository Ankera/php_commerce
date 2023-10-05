<?php

if (session_status() === PHP_SESSION_NONE) {
    // 如果会话未启动，则调用 session_start()
    session_start();
}

$arr=$_SESSION['shops'];

$_SESSION=array();

$_SESSION['shops']=$arr;

echo '<script>location="login.php"</script>';