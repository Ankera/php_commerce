<?php

include '../../public/common/config.php';
global $conn;

$id=$_POST['id'];
$name=$_POST['name'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$email=$_POST['email'];

$sql = "UPDATE touch SET name='{$name}',addr='{$addr}',tel='{$tel}',email='{$email}' where id={$id}";

if(mysqli_query($conn, $sql)){
    echo "<script>location='./userlist.php'</script>";
}

mysqli_close($conn);