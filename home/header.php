<?php
$path = $_SERVER['PHP_SELF'];
$arr = explode('/', $path);
$root = '/'.$arr[1];
?>

<div class="header">
    <div class='headerLogo'>
        <a href="<?php echo $root?>/home/index.php">
            <img src="<?php echo $root?>/home/public/img/logo.png" alt="">
        </a>
    </div>
    <div class="headerLeft">
        <a href="<?php echo $root?>/home/index.php" style="color: #ffffff">
            <span>My shop15商场</span>
        </a>
    </div>
    <div class='headerRight'>
        <a href="<?php echo $root ?>/home/index.php">首页</a>
        <?php
        if (session_status() === PHP_SESSION_NONE) {
            // 如果会话未启动，则调用 session_start()
            session_start();
        }
        if(isset($_SESSION['home_userid'])){
        ?>
            <a href="<?php echo $root ?>/home/person/index.php">【<?php echo $_SESSION['home_username'] ?>】个人中心</a>
            <a href="<?php echo $root ?>/home/cart/index.php">购物车</a>
            <a href="<?php echo $root ?>/home/logout.php">退出</a>
        <?php
        } else {
            ?>
            <a href="<?php echo $root ?>/home/login.php">登录</a>
            <a href="<?php echo $root ?>/home/register.php">注册</a>
        <?php
        }
        ?>
    </div>
</div>