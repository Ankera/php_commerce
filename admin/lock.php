<?php
session_start();

// 未登录，则跳转到登录页面
if(!$_SESSION['admin_userid']){
    echo "<script>location='/php_commerce/admin/login.php'</script>";
}