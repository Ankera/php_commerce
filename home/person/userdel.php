<?php

include '../../public/common/config.php';
global $conn;

$id = $_GET['id'];

$sql = "DELETE FROM touch WHERE id = {$id}";

if(mysqli_query($conn, $sql)){
    echo "<script>location='./userlist.php'</script>";
}

mysqli_close($conn);