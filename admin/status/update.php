<?php

include '../../public/common/config.php';
global $conn;

$name= $_POST['name'];
$id = $_POST['id'];

if(!$name){
    return;
}

$sql = "UPDATE `status` SET `name` = '$name' WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);