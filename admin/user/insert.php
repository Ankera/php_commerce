<?php

include '../../public/common/config.php';
global $conn;

$username= $_POST['username'];
$password= md5($_POST['password']);

if(!($username && $password)){
    return;
}

$sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password')";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);
