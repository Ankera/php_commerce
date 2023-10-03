<?php

session_start();

$_SESSION=array();

session_destroy();

setcookie('PHP_SESSION','',time()-3600,'/');

// 清除会话中的所有数据
session_destroy();

echo '<script>location="/php_commerce/admin/login.php"</script>';