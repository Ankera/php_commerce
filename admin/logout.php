<?php

session_start();

$_SESSION=array();

session_destroy();

setcookie('PHP_SESSION','',time()-3600,'/');

echo '<script>location="/php_commerce/admin/login.php"</script>';
?>