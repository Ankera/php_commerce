<?php

include '../../public/common/config.php';
global $conn;

$id = $_GET['id'];

$sql = "DELETE FROM `status` WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);