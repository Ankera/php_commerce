<?php

include '../public/common/config.php';
global $conn;

$pwd = $_POST['password'];
$password= md5($_POST['password']);
$id = $_POST['id'];

if(!$pwd){
    return;
}

$sql = "UPDATE `user` SET `password` = '$password', `pwd` = '$pwd' WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);