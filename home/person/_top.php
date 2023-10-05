<?php
if (session_status() === PHP_SESSION_NONE) {
    // 如果会话未启动，则调用 session_start()
    session_start();
}

if(!$_SESSION['home_userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
<div class="main">
    <?php
    include '../header.php';
    ?>
    <div class="nav"></div>
    <div class="content">
        <div class="floor">
            <div class="floorHeader">
                <div class="left">
                    <span>个人中心:</span>
                </div>
            </div>

            <div class="floorFooter2">
                <div class='floorFooter2Left'>
                    <ul>
                        <li><a href="./index.php">个人中心</a></li>
                        <li><a href="./userlist.php">查看联系方式</a></li>
                        <li><a href="./useradd.php">添加联系方式</a></li>
                        <li><a href="./orderlist.php">查看我的订单</a></li>
                    </ul>
                </div>