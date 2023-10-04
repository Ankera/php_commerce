<?php
include '../public/common/config.php';

global $conn;

$username=$_POST['username'];
$password=md5($_POST['password']);

echo $username, $password;

$sql = "SELECT * FROM `user` WHERE username = '$username' AND `password` = '$password' AND isadmin= '1'";

$rst=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($rst);

session_start();
if($row){
    $_SESSION['admin_username']=$username;
    $_SESSION['admin_userid']=$row['id'];
    echo "<script>location='./index.php'</script>";
} else {
    echo "<script>alert('用户名或密码有误!')</script>";
    echo "<script>location='./login.php'</script>";
}

mysqli_close($conn);