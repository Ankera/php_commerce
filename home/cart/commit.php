<?php

if (session_status() === PHP_SESSION_NONE) {
    // 如果会话未启动，则调用 session_start()
    session_start();
}

include '../../public/common/config.php';
global $conn;

$code=time().mt_rand();
$user_id=$_SESSION['home_userid'];
$time=time();
$touch_id=$_POST['touch_id'];

foreach ($_SESSION['shops'] as $shop){
    $sql = "INSERT INTO indent(code,user_id,time,touch_id,shop_id,price,num) VALUES('{$code}', '{$user_id}', '{$time}', '{$touch_id}', '{$shop['id']}','{$shop['price']}','{$shop['num']}')";

    mysqli_query($conn, $sql);

    //减库存
    $st=$shop['stock']-$shop['num'];
    $sqlStock="update shop set stock='{$st}' where id={$shop['id']}";
    mysqli_query($conn, $sqlStock);
}

//清空购物车
$_SESSION['shops']=array();

mysqli_close($conn);

echo "<script>alert('您的订单号为:{$code}')</script>";
echo "<script>location='../person/orderlist.php'</script>";