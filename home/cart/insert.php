<?php
include '../../public/common/config.php';
global $conn;
$id = $_GET["id"];
$sql = "SELECT * FROM shop WHERE id = {$id}";
$rst = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($rst);

session_start();
if($row['stock']>0){
    //把商品放入购物车
    $_SESSION['shops'][$id]=$row;
    $_SESSION['shops'][$id]['num']=1;

//    echo '<pre>';
//    print_r($_SESSION);
//    echo '</pre>';
//    exit;
    echo "<script>location='./index.php'</script>";
}else{
    echo "<script>alert('您购买的商品库存量不足!')</script>";
    echo "<script>location='../index.php'</script>";
}

mysqli_close($conn);
