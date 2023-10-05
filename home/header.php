<?php
$path = $_SERVER['PHP_SELF'];
$arr = explode('/', $path);
$root = '/'.$arr[1];
?>

<div class="header">
    <div class='headerLogo'>
        <a href="./index.php">
            <img src="./public/img/logo.png" alt="">
        </a>
    </div>
    <div class="headerLeft">
        <a href="./index.php" style="color: #ffffff">
            <span>My shop15商场</span>
        </a>
    </div>
    <div class='headerRight'>
        <a href="<?php echo $arr ?>/home/index.php">首页</a>
        <a href="<?php echo $arr ?>/home/login.php">登录</a>
        <a href="<?php echo $arr ?>/home/register.php">注册</a>
        <a href="<?php echo $arr ?>/home/index.php">个人中心</a>
        <a href="<?php echo $arr ?>/home/shop.php">购物车</a>
    </div>
</div>