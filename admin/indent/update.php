<?php

include '../../public/common/config.php';
global $conn;

$code=$_POST['code'];
$status_id=$_POST['status_id'];

$sql="update indent set status_id={$status_id} where code='{$code}'";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}

mysqli_close($conn);