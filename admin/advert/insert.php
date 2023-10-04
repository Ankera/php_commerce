<?php

include '../../public/common/config.php';
include '../../public/common/function.php';

global $conn;
global $img;

$pos=$_POST['pos'];
$url=$_POST['url'];

$src=$_FILES['img']['tmp_name'];

$name=$_FILES['img']['name'];

$array = explode('.', $name);
$ext=array_pop($array);

$dst='../../public/uploads/'.time().mt_rand().'.'.$ext;

if(move_uploaded_file($src,$dst)){
    thumb($dst,200,200);

    $img=basename($dst);

    $sql = "INSERT INTO `advert` (img, pos, url) VALUES ('$img', '$pos', '$url')";
    echo $sql;
    if(mysqli_query($conn, $sql)){
        echo '<script>location="./index.php"</script>';
    }
}


mysqli_close($conn);
