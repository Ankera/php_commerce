<?php

include '../../public/common/config.php';
include '../../public/common/function.php';

global $conn;
global $img;

$sname=$_POST['name'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$shelf=$_POST['shelf'];
$brand_id=$_POST['brand_id'];

if(!($sname && $price)){
    return;
}

$src=$_FILES['img']['tmp_name'];

$name=$_FILES['img']['name'];

$array = explode('.', $name);
$ext=array_pop($array);

$dst='../../public/uploads/'.time().mt_rand().'.'.$ext;

if(move_uploaded_file($src,$dst)){
    thumb($dst,200,200);

    $img=basename($dst);

    $sql = "INSERT INTO `shop` (name,price,stock,shelf,brand_id,img) VALUES ('{$sname}','{$price}','{$stock}','{$shelf}','{$brand_id}','{$img}')";

    if(mysqli_query($conn, $sql)){
        echo '<script>location="./index.php"</script>';
    }
}


mysqli_close($conn);
