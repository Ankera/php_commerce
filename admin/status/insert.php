<?php

include '../../public/common/config.php';
global $conn;

$name= $_POST['name'];

if(!$name){
    return;
}

$sql = "INSERT INTO `status` (`name`) VALUES ('$name')";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);
