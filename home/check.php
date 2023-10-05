<?php
if (session_status() === PHP_SESSION_NONE) {
    // 如果会话未启动，则调用 session_start()
    session_start();
}

include '../public/common/config.php';
global $conn;
$username=$_POST['username'];
$password=md5($_POST['password']);

if(!($username && $password)){
    return;
}

$sql="select * from user where username='{$username}' and password='{$password}'";

$rst=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($rst);

if($row){
    $_SESSION['home_username'] = $username;
    $_SESSION['home_userid'] = $row['id'];

    echo "<script>location='./person/index.php'</script>";
}else{
    echo "<script>alert('用户名或密码有误!')</script>";
    echo "<script>location='login.php'</script>";
}

mysqli_close($conn);