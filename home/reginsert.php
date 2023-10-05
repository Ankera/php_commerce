<?php
include '../public/common/config.php';

global $conn;
session_start();

$username=$_POST['username'];
$pwd = $_POST['password'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$fcode=strtolower($_POST['fcode']);
$vcode=strtolower($_SESSION['vcode']);

if($fcode == $vcode){
    if($password==$repassword){
        $sql="insert into user(username,password,pwd) values('{$username}','{$password}', '{$pwd}')";
        echo $sql;
        if($row = mysqli_query($conn, $sql)){
            $_SESSION['home_username']=$username;
            $_SESSION['home_userid']= mysqli_insert_id($conn);
            echo "<script>location='./person/index.php'</script>";
        }
    }else{
        echo "<script>location='./register.php'</script>";
    }
}else{
    echo "<script>location='./register.php'</script>";
}

mysqli_close($conn);