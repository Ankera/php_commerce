<?php

include '../../public/common/config.php';
global $conn;

$code=$_GET['code'];
$sql="delete from indent where code='{$code}'";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}

mysqli_close($conn);