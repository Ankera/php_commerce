<?php

include '../../public/common/config.php';
global $conn;

$username= $_POST['username'];
$pwd = $_POST['password'];
$password= md5($_POST['password']);

if(!($username && $pwd)){
    return;
}

$sql = "INSERT INTO `user` (`username`, `password`, `pwd`) VALUES ('$username', '$password', '$pwd')";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);
