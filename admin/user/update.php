<?php

include '../../public/common/config.php';
global $conn;

$username= $_POST['username'];
$pwd = $_POST['password'];
$password= md5($_POST['password']);
$id = $_POST['id'];

if(!($username && $pwd)){
    return;
}

$sql = "UPDATE `user` SET `username` = '$username', `password` = '$password', `pwd` = '$pwd' WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);